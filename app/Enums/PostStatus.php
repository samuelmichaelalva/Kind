<?php

namespace App\Enums;

enum PostStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case REVIEW = 'review';
    case ARCHIVED = 'archived';
}
