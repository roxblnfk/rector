<?php

declare(strict_types=1);

namespace Rector\Renaming\ValueObject;

final class RenameStaticMethod
{
    /**
     * @var string
     */
    private $oldClass;

    /**
     * @var string
     */
    private $oldMethod;

    /**
     * @var string
     */
    private $newClass;

    /**
     * @var string
     */
    private $newMethod;

    public function __construct(string $oldClass, string $oldMethod, string $newClass, string $newMethod)
    {
        $this->oldClass = $oldClass;
        $this->oldMethod = $oldMethod;
        $this->newClass = $newClass;
        $this->newMethod = $newMethod;
    }

    public function getOldClass(): string
    {
        return $this->oldClass;
    }

    public function getOldMethod(): string
    {
        return $this->oldMethod;
    }

    public function getNewClass(): string
    {
        return $this->newClass;
    }

    public function getNewMethod(): string
    {
        return $this->newMethod;
    }

    public function hasClassChanged(): bool
    {
        return $this->oldClass !== $this->newClass;
    }
}
