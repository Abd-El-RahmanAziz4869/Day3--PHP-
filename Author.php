<?php
class Author {
    private string $name;
    private string $email;
    private string $gender; // 'm' or 'f'

    
    public function __construct(string $name, string $email, string $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    
    public function getName(): string {
        return $this->name;
    }

   
    public function getEmail(): string {
        return $this->email;
    }


    public function setEmail(string $email): void {
        $this->email = $email;
    }

    
    public function getGender(): string {
        return $this->gender;
    }

    
    public function __toString(): string {
        return "Author[name={$this->name},email={$this->email},gender={$this->gender}]";
    }
}
?>
