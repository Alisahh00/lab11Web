<?php
class Form {
    private $fields = array();
    private $action;
    private $submit;
    private $jumField = 0;

    public function __construct($action, $submit) {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function displayForm() {
        echo "<form action='".$this->action."' method='POST' class='p-4 border rounded bg-light'>";
        foreach ($this->fields as $field) {
            echo "<div class='mb-3'>";
            echo "<label class='form-label'>".$field['label']."</label>";
            echo "<input type='text' name='".$field['name']."' class='form-control' required>";
            echo "</div>";
        }
        echo "<button type='submit' class='btn btn-primary w-100'>".$this->submit."</button>";
        echo "</form>";
    }

    public function addField($name, $label) {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->jumField++;
    }
}
?>