<?php
namespace App\Controllers;

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Api\Admin\AdminApi;
use Exception;

class CloudManager extends BaseController
{
    public function __construct()
    {
        Configuration::instance([
            'cloud' => [
                'cloud_name' => 'di5s79g5t',
                'api_key' => '712549991914448',
                'api_secret' => 'hk2RbTwB6Fq9tBPkhXpZ0vQ3wYk'
            ],
            'url' => ['secure' => true]
        ]);
    }

    // This sends the list of images to the dashboard
    public function getFilesJSON()
    {
        $adminApi = new AdminApi();
        $folder = $this->request->getGet('folder') ?: 'uploads';
        try {
            $assets = $adminApi->assets(['prefix' => $folder, 'type' => 'upload']);
            return $this->response->setJSON(['files' => $assets['resources']]);
        } catch (Exception $e) {
            return $this->response->setJSON(['error' => $e->getMessage()]);
        }
    }

    // This handles the actual file upload
    public function upload()
    {
        $file = $this->request->getFile('file');
        if ($file && $file->isValid()) {
            $uploadApi = new UploadApi();
            $uploadApi->upload($file->getTempName(), ['folder' => 'uploads']);
            return $this->response->setJSON(['status' => 'success']);
        }
        return $this->response->setJSON(['status' => 'error']);
    }
}