<?php

namespace App\Enums;

enum CustomFieldTypeEnum: string
{
    case Text = 'text';
    case TextArea = 'text_area';
    case Number = 'number';
    case Select = 'select';
    case Checkbox = 'checkbox';
    case Radio = 'radio';
    case Date = 'date';
    case File = 'file';
}
