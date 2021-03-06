<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     13/04/2018
// Time:     18:09
// Project:  GoogleOauth2Middleware
//
declare(strict_types=1);
namespace CodeInc\GoogleOAuth2Middleware\Validators\PublicRequests;
use Psr\Http\Message\ServerRequestInterface;


/**
 * Interface PublicRequestValidatorInterface
 *
 * @package CodeInc\GoogleOAuth2Middleware\Validators\PublicRequests
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
interface PublicRequestValidatorInterface
{
    /**
     * Validates if a request is public.
     *
     * @param ServerRequestInterface $request
     * @return bool
     */
    public function isRequestPublic(ServerRequestInterface $request):bool;
}