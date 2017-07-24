<?php
namespace Test\DTO;

use JMS\Serializer\Annotation\Type;
use Doctrine\Common\Collections\ArrayCollection;

class User
{
    /**
     * @Type("Test\DTO\Company")
     */
	private $company;

	/**
	 * @Type("ArrayCollection<Test\DTO\Message>")
	 */
	private $messages;

    /**
     * @Type("string")
     */
	private $name;

	public function __construct()
	{
		$this->messages = new ArrayCollection();
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}

	public function addMessage(Message $message)
	{
		$this->messages->add($message);
	}

	public function getMessages(): ArrayCollection
	{
		return $this->messages;
	}

	public function setCompany(Company $company)
	{
		$this->company = $company;
	}

	public function getCompany(): Company
	{
		return $this->company;
	}
}
