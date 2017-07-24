<?php
namespace Test\Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class Message
{
    /**
     * @ODM\Id
     */
    private $id;

    /**
     * @ODM\Field(name="content", type="string")
     */
    private $content;

    /**
     * @ODM\Field(name="images", type="hash")
     */
    private $images = [];

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function addImage(string $image)
    {
        $this->images[] = $image;
    }
}
