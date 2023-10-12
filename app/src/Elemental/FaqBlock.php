<?php

namespace App\Elements;

use App\Objects\Question;
use DNADesign\Elemental\Models\BaseElement;

class FaqBlock extends BaseElement {
    private static $table_name = "FaqBlock";
    private static $singular_name = "FAQ block";
    private static $plural_name = 'FaqBlocks';
    private static $description = 'Veelgestelde vragen block';
    private static $icon = 'font-icon-white-question';
    private static $db = [
        'Title' => 'HTMLText',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }

    public function getQuestionList()
    {

        $questions = Question::get();

        $questionArray = [];

        foreach ($questions as $key => $value) {
            $questionArray[] = [
                "question" => $value->Question,
                "answer" => $value->Answer,
            ];
        }

        return json_encode($questionArray);
    }
}
