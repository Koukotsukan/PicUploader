<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to successfully sharing an album.
 *
 * Generated from protobuf message <code>google.photos.library.v1.ShareAlbumResponse</code>
 */
class ShareAlbumResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output only] Information about the shared album.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ShareInfo share_info = 1;</code>
     */
    private $share_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Photos\Library\V1\ShareInfo $share_info
     *           [Output only] Information about the shared album.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output only] Information about the shared album.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ShareInfo share_info = 1;</code>
     * @return \Google\Photos\Library\V1\ShareInfo
     */
    public function getShareInfo()
    {
        return $this->share_info;
    }

    /**
     * [Output only] Information about the shared album.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ShareInfo share_info = 1;</code>
     * @param \Google\Photos\Library\V1\ShareInfo $var
     * @return $this
     */
    public function setShareInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Photos\Library\V1\ShareInfo::class);
        $this->share_info = $var;

        return $this;
    }

}

