<?php
namespace Test\DTO;

use JMS\Serializer\Annotation\Type;

class Company
{
    /**
     * @Type("string")
     */
	private $title;

	public function setTitle(string $title)
	{
		$this->title = $title;
	}

	public function getTitle(): string
	{
		return $this->title;
	}
}
