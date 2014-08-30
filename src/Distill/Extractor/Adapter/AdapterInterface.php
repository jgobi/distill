<?php

namespace Distill\Extractor\Adapter;

use Distill\File;

interface AdapterInterface
{

    /**
     * Checks whether the adapter supports the file and is available in the system.
     * @param File $file File
     *
     * @return bool Returns TRUE if it can decompress the file.
     */
    public function supports(File $file);

    /**
     * Extracts the compressed file into the given path.
     * @param File   $file Compressed file
     * @param string $path Destination path
     *
     * @return bool Returns TRUE when successful, FALSE otherwise
     */
    public function extract(File $file, $path);

}