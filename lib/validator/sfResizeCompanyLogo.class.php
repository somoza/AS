<?php
class sfResizeCompanyLogo extends sfValidatedFile
{
    public function save($file = null, $fileMode = 0666, $create = true, $dirMode = 0777)
    {
        $file = parent::save($file, $fileMode, $create, $dirMode);

        $thumbnail = new sfThumbnail(100, 100, true, true, 75, 'sfGDAdapter', array(), true);
        $thumbnail->loadFile($this->getTempName());
        $thumbnail->save($this->path . DIRECTORY_SEPARATOR . $file);

        return $file;
    }
}
?>