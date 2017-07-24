<?php
namespace Test\DTO;

use JMS\Serializer\Annotation\Type;

class Message
{
    /**
     * @Type("string")
     */
	private $content;

    /**
     * @Type("array<string>")
     */
	private $images = [];

	public function  setContent(string $content)
	{
		$this->content = $content;
	}

	public function getContent(): string
	{
		return $this->content;
	}

	public function addImage(string $image)
	{
		$this->images[] = $image;
	}

	public function getImages(): array
	{
		return $this->images;
	}
}
