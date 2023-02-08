<?php
/**
 * SocialConnect project
 * @author: Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

namespace SocialConnect\Provider\Exception;

use SocialConnect\Common\Exception;

class InvalidAccessToken extends Exception
{
    public function __construct($message = 'Invalid access token')
    {
        parent::__construct($message);
    }
}
