<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Respinar\ProductsBundle\Security;

final class ProductsPermissions
{
    public const USER_CAN_EDIT_ARCHIVE = 'contao_user.news';
    public const USER_CAN_CREATE_ARCHIVES = 'contao_user.newp.create';
    public const USER_CAN_DELETE_ARCHIVES = 'contao_user.newp.delete';

    public const USER_CAN_EDIT_FEED = 'contao_user.newsfeeds';
    public const USER_CAN_CREATE_FEEDS = 'contao_user.newsfeedp.create';
    public const USER_CAN_DELETE_FEEDS = 'contao_user.newsfeedp.delete';
}
