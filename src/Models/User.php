<?php
namespace Test\Models;

use JMS\Serializer\Annotation\Type;

class User
{
    /**
     * @Type("Test\Models\Company")
     */
	private $company;

	//private $messages = [];

    /**
     * @Type("string")
     */
	private $name;

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}

	/*public function addMessage(Message $message)
	{
		$this->messages[] = $message;
	}

	public function getMessages(): array
	{
		return $this->messages;
	}*/

	public function setCompany(Company $company)
	{
		$this->company = $company;
	}

	public function getCompany(): Company
	{
		return $this->company;
	}
}
