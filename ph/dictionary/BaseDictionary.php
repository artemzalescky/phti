<?php

namespace ph\dictionary;

class BaseDictionary {
    private $languageOrder;
    private $lexicon;

    public function __construct($languages, $lexicon) {
        $this->lexicon = $lexicon;
        for ($i = 0; $i < count($languages); $i++) {
            $this->languageOrder[$languages[$i]] = $i;
        }
    }

    public function getText($textKey, $lang) {
        if (array_key_exists($textKey, $this->lexicon)) {
            $localisedTexts = $this->lexicon[$textKey];
            $langIndex = $this->getLangIndex($lang);
            if (array_key_exists($langIndex, $localisedTexts)) {
                return $this->lexicon[$textKey][$langIndex];
            }
        }
        return null;
    }

    private function getLangIndex($language) {
        return $this->languageOrder[$language];
    }
}
