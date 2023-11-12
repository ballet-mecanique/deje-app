<?php

use BalletMecanique\PianolaLaravel\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable();
            $table->string('name_de')->nullable();
            $table->string('name_fr')->nullable();
            $table->string('name_it')->nullable();
            $table->string('iso_3166_1')->nullable();
            $table->timestamps();
        });
        $countries = json_decode($this->getCountriesJson(), true);
        foreach ($countries as $country) {
            Country::create([
                'name_de' => $country['name_de'],
                'name_en' => $country['name_en'],
                'name_fr' => $country['name_fr'],
                'iso_3166_1' => $country['iso_3166_1']
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }

    protected function getCountriesJson()
    {
        return <<<'EOT'
        [
            {
                "id": 1,
                "name_de": "Afghanistan",
                "name_en": "Afghanistan",
                "name_fr": "Afghanistan",
                "iso_3166_1": "af",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 2,
                "name_de": "Albanien",
                "name_en": "Albania",
                "name_fr": "Albanie",
                "iso_3166_1": "al",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 3,
                "name_de": "Algerien",
                "name_en": "Algeria",
                "name_fr": "Algérie",
                "iso_3166_1": "dz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 4,
                "name_de": "Andorra",
                "name_en": "Andorra",
                "name_fr": "Andorre",
                "iso_3166_1": "ad",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 5,
                "name_de": "Angola",
                "name_en": "Angola",
                "name_fr": "Angola",
                "iso_3166_1": "ao",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 6,
                "name_de": "Antigua und Barbuda",
                "name_en": "Antigua and Barbuda",
                "name_fr": "Antigua-et-Barbuda",
                "iso_3166_1": "ag",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 7,
                "name_de": "Argentinien",
                "name_en": "Argentina",
                "name_fr": "Argentine",
                "iso_3166_1": "ar",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 8,
                "name_de": "Armenien",
                "name_en": "Armenia",
                "name_fr": "Arménie",
                "iso_3166_1": "am",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 9,
                "name_de": "Australien",
                "name_en": "Australia",
                "name_fr": "Australie",
                "iso_3166_1": "au",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 10,
                "name_de": "Österreich",
                "name_en": "Austria",
                "name_fr": "Autriche",
                "iso_3166_1": "at",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 11,
                "name_de": "Aserbaidschan",
                "name_en": "Azerbaijan",
                "name_fr": "Azerbaïdjan",
                "iso_3166_1": "az",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 12,
                "name_de": "Bahamas",
                "name_en": "Bahamas",
                "name_fr": "Bahamas",
                "iso_3166_1": "bs",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 13,
                "name_de": "Bahrain",
                "name_en": "Bahrain",
                "name_fr": "Bahreïn",
                "iso_3166_1": "bh",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 14,
                "name_de": "Bangladesch",
                "name_en": "Bangladesh",
                "name_fr": "Bangladesh",
                "iso_3166_1": "bd",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 15,
                "name_de": "Barbados",
                "name_en": "Barbados",
                "name_fr": "Barbade",
                "iso_3166_1": "bb",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 16,
                "name_de": "Belarus",
                "name_en": "Belarus",
                "name_fr": "Biélorussie",
                "iso_3166_1": "by",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 17,
                "name_de": "Belgien",
                "name_en": "Belgium",
                "name_fr": "Belgique",
                "iso_3166_1": "be",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 18,
                "name_de": "Belize",
                "name_en": "Belize",
                "name_fr": "Belize",
                "iso_3166_1": "bz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 19,
                "name_de": "Benin",
                "name_en": "Benin",
                "name_fr": "Bénin",
                "iso_3166_1": "bj",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 20,
                "name_de": "Bhutan",
                "name_en": "Bhutan",
                "name_fr": "Bhoutan",
                "iso_3166_1": "bt",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 21,
                "name_de": "Bolivien",
                "name_en": "Bolivia (Plurinational State of)",
                "name_fr": "Bolivie",
                "iso_3166_1": "bo",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 22,
                "name_de": "Bosnien und Herzegowina",
                "name_en": "Bosnia and Herzegovina",
                "name_fr": "Bosnie-Herzégovine",
                "iso_3166_1": "ba",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 23,
                "name_de": "Botswana",
                "name_en": "Botswana",
                "name_fr": "Botswana",
                "iso_3166_1": "bw",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 24,
                "name_de": "Brasilien",
                "name_en": "Brazil",
                "name_fr": "Brésil",
                "iso_3166_1": "br",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 25,
                "name_de": "Brunei",
                "name_en": "Brunei Darussalam",
                "name_fr": "Brunei",
                "iso_3166_1": "bn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 26,
                "name_de": "Bulgarien",
                "name_en": "Bulgaria",
                "name_fr": "Bulgarie",
                "iso_3166_1": "bg",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 27,
                "name_de": "Burkina Faso",
                "name_en": "Burkina Faso",
                "name_fr": "Burkina Faso",
                "iso_3166_1": "bf",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 28,
                "name_de": "Burundi",
                "name_en": "Burundi",
                "name_fr": "Burundi",
                "iso_3166_1": "bi",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 29,
                "name_de": "Kap Verde",
                "name_en": "Cabo Verde",
                "name_fr": "Cap-Vert",
                "iso_3166_1": "cv",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 30,
                "name_de": "Kambodscha",
                "name_en": "Cambodia",
                "name_fr": "Cambodge",
                "iso_3166_1": "kh",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 31,
                "name_de": "Kamerun",
                "name_en": "Cameroon",
                "name_fr": "Cameroun",
                "iso_3166_1": "cm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 32,
                "name_de": "Kanada",
                "name_en": "Canada",
                "name_fr": "Canada",
                "iso_3166_1": "ca",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 33,
                "name_de": "Zentral­afrikanische Republik",
                "name_en": "Central African Republic",
                "name_fr": "République centrafricaine",
                "iso_3166_1": "cf",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 34,
                "name_de": "Tschad",
                "name_en": "Chad",
                "name_fr": "Tchad",
                "iso_3166_1": "td",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 35,
                "name_de": "Chile",
                "name_en": "Chile",
                "name_fr": "Chili",
                "iso_3166_1": "cl",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 36,
                "name_de": "Volksrepublik China",
                "name_en": "China",
                "name_fr": "Chine",
                "iso_3166_1": "cn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 37,
                "name_de": "Kolumbien",
                "name_en": "Colombia",
                "name_fr": "Colombie",
                "iso_3166_1": "co",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 38,
                "name_de": "Komoren",
                "name_en": "Comoros",
                "name_fr": "Comores (pays)",
                "iso_3166_1": "km",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 39,
                "name_de": "Kongo, Republik",
                "name_en": "Congo",
                "name_fr": "République du Congo",
                "iso_3166_1": "cg",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 40,
                "name_de": "Kongo, Demokratische Republik",
                "name_en": "Congo, Democratic Republic of the",
                "name_fr": "République démocratique du Congo",
                "iso_3166_1": "cd",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 41,
                "name_de": "Costa Rica",
                "name_en": "Costa Rica",
                "name_fr": "Costa Rica",
                "iso_3166_1": "cr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 42,
                "name_de": "Elfenbeinküste",
                "name_en": "Côte d'Ivoire",
                "name_fr": "Côte d'Ivoire",
                "iso_3166_1": "ci",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 43,
                "name_de": "Kroatien",
                "name_en": "Croatia",
                "name_fr": "Croatie",
                "iso_3166_1": "hr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 44,
                "name_de": "Kuba",
                "name_en": "Cuba",
                "name_fr": "Cuba",
                "iso_3166_1": "cu",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 45,
                "name_de": "Zypern",
                "name_en": "Cyprus",
                "name_fr": "Chypre (pays)",
                "iso_3166_1": "cy",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 46,
                "name_de": "Tschechien",
                "name_en": "Czechia",
                "name_fr": "Tchéquie",
                "iso_3166_1": "cz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 47,
                "name_de": "Dänemark",
                "name_en": "Denmark",
                "name_fr": "Danemark",
                "iso_3166_1": "dk",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 48,
                "name_de": "Dschibuti",
                "name_en": "Djibouti",
                "name_fr": "Djibouti",
                "iso_3166_1": "dj",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 49,
                "name_de": "Dominica",
                "name_en": "Dominica",
                "name_fr": "Dominique",
                "iso_3166_1": "dm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 50,
                "name_de": "Dominikanische Republik",
                "name_en": "Dominican Republic",
                "name_fr": "République dominicaine",
                "iso_3166_1": "do",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 51,
                "name_de": "Ecuador",
                "name_en": "Ecuador",
                "name_fr": "Équateur (pays)",
                "iso_3166_1": "ec",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 52,
                "name_de": "Ägypten",
                "name_en": "Egypt",
                "name_fr": "Égypte",
                "iso_3166_1": "eg",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 53,
                "name_de": "El Salvador",
                "name_en": "El Salvador",
                "name_fr": "Salvador",
                "iso_3166_1": "sv",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 54,
                "name_de": "Äquatorialguinea",
                "name_en": "Equatorial Guinea",
                "name_fr": "Guinée équatoriale",
                "iso_3166_1": "gq",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 55,
                "name_de": "Eritrea",
                "name_en": "Eritrea",
                "name_fr": "Érythrée",
                "iso_3166_1": "er",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 56,
                "name_de": "Estland",
                "name_en": "Estonia",
                "name_fr": "Estonie",
                "iso_3166_1": "ee",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 57,
                "name_de": "Eswatini",
                "name_en": "Eswatini",
                "name_fr": "Eswatini",
                "iso_3166_1": "sz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 58,
                "name_de": "Äthiopien",
                "name_en": "Ethiopia",
                "name_fr": "Éthiopie",
                "iso_3166_1": "et",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 59,
                "name_de": "Fidschi",
                "name_en": "Fiji",
                "name_fr": "Fidji",
                "iso_3166_1": "fj",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 60,
                "name_de": "Finnland",
                "name_en": "Finland",
                "name_fr": "Finlande",
                "iso_3166_1": "fi",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 61,
                "name_de": "Frankreich",
                "name_en": "France",
                "name_fr": "France",
                "iso_3166_1": "fr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 62,
                "name_de": "Gabun",
                "name_en": "Gabon",
                "name_fr": "Gabon",
                "iso_3166_1": "ga",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 63,
                "name_de": "Gambia",
                "name_en": "Gambia",
                "name_fr": "Gambie",
                "iso_3166_1": "gm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 64,
                "name_de": "Georgien",
                "name_en": "Georgia",
                "name_fr": "Géorgie (pays)",
                "iso_3166_1": "ge",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 65,
                "name_de": "Deutschland",
                "name_en": "Germany",
                "name_fr": "Allemagne",
                "iso_3166_1": "de",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 66,
                "name_de": "Ghana",
                "name_en": "Ghana",
                "name_fr": "Ghana",
                "iso_3166_1": "gh",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 67,
                "name_de": "Griechenland",
                "name_en": "Greece",
                "name_fr": "Grèce",
                "iso_3166_1": "gr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 68,
                "name_de": "Grenada",
                "name_en": "Grenada",
                "name_fr": "Grenade (pays)",
                "iso_3166_1": "gd",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 69,
                "name_de": "Guatemala",
                "name_en": "Guatemala",
                "name_fr": "Guatemala",
                "iso_3166_1": "gt",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 70,
                "name_de": "Guinea",
                "name_en": "Guinea",
                "name_fr": "Guinée",
                "iso_3166_1": "gn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 71,
                "name_de": "Guinea-Bissau",
                "name_en": "Guinea-Bissau",
                "name_fr": "Guinée-Bissau",
                "iso_3166_1": "gw",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 72,
                "name_de": "Guyana",
                "name_en": "Guyana",
                "name_fr": "Guyana",
                "iso_3166_1": "gy",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 73,
                "name_de": "Haiti",
                "name_en": "Haiti",
                "name_fr": "Haïti",
                "iso_3166_1": "ht",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 74,
                "name_de": "Honduras",
                "name_en": "Honduras",
                "name_fr": "Honduras",
                "iso_3166_1": "hn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 75,
                "name_de": "Ungarn",
                "name_en": "Hungary",
                "name_fr": "Hongrie",
                "iso_3166_1": "hu",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 76,
                "name_de": "Island",
                "name_en": "Iceland",
                "name_fr": "Islande",
                "iso_3166_1": "is",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 77,
                "name_de": "Indien",
                "name_en": "India",
                "name_fr": "Inde",
                "iso_3166_1": "in",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 78,
                "name_de": "Indonesien",
                "name_en": "Indonesia",
                "name_fr": "Indonésie",
                "iso_3166_1": "id",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 79,
                "name_de": "Iran",
                "name_en": "Iran (Islamic Republic of)",
                "name_fr": "Iran",
                "iso_3166_1": "ir",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 80,
                "name_de": "Irak",
                "name_en": "Iraq",
                "name_fr": "Irak",
                "iso_3166_1": "iq",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 81,
                "name_de": "Irland",
                "name_en": "Ireland",
                "name_fr": "Irlande (pays)",
                "iso_3166_1": "ie",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 82,
                "name_de": "Israel",
                "name_en": "Israel",
                "name_fr": "Israël",
                "iso_3166_1": "il",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 83,
                "name_de": "Italien",
                "name_en": "Italy",
                "name_fr": "Italie",
                "iso_3166_1": "it",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 84,
                "name_de": "Jamaika",
                "name_en": "Jamaica",
                "name_fr": "Jamaïque",
                "iso_3166_1": "jm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 85,
                "name_de": "Japan",
                "name_en": "Japan",
                "name_fr": "Japon",
                "iso_3166_1": "jp",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 86,
                "name_de": "Jordanien",
                "name_en": "Jordan",
                "name_fr": "Jordanie",
                "iso_3166_1": "jo",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 87,
                "name_de": "Kasachstan",
                "name_en": "Kazakhstan",
                "name_fr": "Kazakhstan",
                "iso_3166_1": "kz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 88,
                "name_de": "Kenia",
                "name_en": "Kenya",
                "name_fr": "Kenya",
                "iso_3166_1": "ke",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 89,
                "name_de": "Kiribati",
                "name_en": "Kiribati",
                "name_fr": "Kiribati",
                "iso_3166_1": "ki",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 90,
                "name_de": "Korea, Nord",
                "name_en": "Korea (Democratic People's Republic of)",
                "name_fr": "Corée du Nord",
                "iso_3166_1": "kp",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 91,
                "name_de": "Korea, Süd",
                "name_en": "Korea, Republic of",
                "name_fr": "Corée du Sud",
                "iso_3166_1": "kr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 92,
                "name_de": "Kuwait",
                "name_en": "Kuwait",
                "name_fr": "Koweït",
                "iso_3166_1": "kw",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 93,
                "name_de": "Kirgisistan",
                "name_en": "Kyrgyzstan",
                "name_fr": "Kirghizistan",
                "iso_3166_1": "kg",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 94,
                "name_de": "Laos",
                "name_en": "Lao People's Democratic Republic",
                "name_fr": "Laos",
                "iso_3166_1": "la",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 95,
                "name_de": "Lettland",
                "name_en": "Latvia",
                "name_fr": "Lettonie",
                "iso_3166_1": "lv",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 96,
                "name_de": "Libanon",
                "name_en": "Lebanon",
                "name_fr": "Liban",
                "iso_3166_1": "lb",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 97,
                "name_de": "Lesotho",
                "name_en": "Lesotho",
                "name_fr": "Lesotho",
                "iso_3166_1": "ls",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 98,
                "name_de": "Liberia",
                "name_en": "Liberia",
                "name_fr": "Liberia",
                "iso_3166_1": "lr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 99,
                "name_de": "Libyen",
                "name_en": "Libya",
                "name_fr": "Libye",
                "iso_3166_1": "ly",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 100,
                "name_de": "Liechtenstein",
                "name_en": "Liechtenstein",
                "name_fr": "Liechtenstein",
                "iso_3166_1": "li",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 101,
                "name_de": "Litauen",
                "name_en": "Lithuania",
                "name_fr": "Lituanie",
                "iso_3166_1": "lt",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 102,
                "name_de": "Luxemburg",
                "name_en": "Luxembourg",
                "name_fr": "Luxembourg (pays)",
                "iso_3166_1": "lu",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 103,
                "name_de": "Madagaskar",
                "name_en": "Madagascar",
                "name_fr": "Madagascar",
                "iso_3166_1": "mg",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 104,
                "name_de": "Malawi",
                "name_en": "Malawi",
                "name_fr": "Malawi",
                "iso_3166_1": "mw",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 105,
                "name_de": "Malaysia",
                "name_en": "Malaysia",
                "name_fr": "Malaisie",
                "iso_3166_1": "my",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 106,
                "name_de": "Malediven",
                "name_en": "Maldives",
                "name_fr": "Maldives",
                "iso_3166_1": "mv",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 107,
                "name_de": "Mali",
                "name_en": "Mali",
                "name_fr": "Mali",
                "iso_3166_1": "ml",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 108,
                "name_de": "Malta",
                "name_en": "Malta",
                "name_fr": "Malte",
                "iso_3166_1": "mt",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 109,
                "name_de": "Marshallinseln",
                "name_en": "Marshall Islands",
                "name_fr": "Îles Marshall (pays)",
                "iso_3166_1": "mh",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 110,
                "name_de": "Mauretanien",
                "name_en": "Mauritania",
                "name_fr": "Mauritanie",
                "iso_3166_1": "mr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 111,
                "name_de": "Mauritius",
                "name_en": "Mauritius",
                "name_fr": "Maurice (pays)",
                "iso_3166_1": "mu",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 112,
                "name_de": "Mexiko",
                "name_en": "Mexico",
                "name_fr": "Mexique",
                "iso_3166_1": "mx",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 113,
                "name_de": "Mikronesien",
                "name_en": "Micronesia (Federated States of)",
                "name_fr": "États fédérés de Micronésie (pays)",
                "iso_3166_1": "fm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 114,
                "name_de": "Moldau",
                "name_en": "Moldova, Republic of",
                "name_fr": "Moldavie",
                "iso_3166_1": "md",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 115,
                "name_de": "Monaco",
                "name_en": "Monaco",
                "name_fr": "Monaco",
                "iso_3166_1": "mc",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 116,
                "name_de": "Mongolei",
                "name_en": "Mongolia",
                "name_fr": "Mongolie",
                "iso_3166_1": "mn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 117,
                "name_de": "Montenegro",
                "name_en": "Montenegro",
                "name_fr": "Monténégro",
                "iso_3166_1": "me",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 118,
                "name_de": "Marokko",
                "name_en": "Morocco",
                "name_fr": "Maroc",
                "iso_3166_1": "ma",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 119,
                "name_de": "Mosambik",
                "name_en": "Mozambique",
                "name_fr": "Mozambique",
                "iso_3166_1": "mz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 120,
                "name_de": "Myanmar",
                "name_en": "Myanmar",
                "name_fr": "Birmanie",
                "iso_3166_1": "mm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 121,
                "name_de": "Namibia",
                "name_en": "Namibia",
                "name_fr": "Namibie",
                "iso_3166_1": "na",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 122,
                "name_de": "Nauru",
                "name_en": "Nauru",
                "name_fr": "Nauru",
                "iso_3166_1": "nr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 123,
                "name_de": "Nepal",
                "name_en": "Nepal",
                "name_fr": "Népal",
                "iso_3166_1": "np",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 124,
                "name_de": "Niederlande",
                "name_en": "Netherlands",
                "name_fr": "Pays-Bas",
                "iso_3166_1": "nl",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 125,
                "name_de": "Neuseeland",
                "name_en": "New Zealand",
                "name_fr": "Nouvelle-Zélande",
                "iso_3166_1": "nz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 126,
                "name_de": "Nicaragua",
                "name_en": "Nicaragua",
                "name_fr": "Nicaragua",
                "iso_3166_1": "ni",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 127,
                "name_de": "Niger",
                "name_en": "Niger",
                "name_fr": "Niger",
                "iso_3166_1": "ne",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 128,
                "name_de": "Nigeria",
                "name_en": "Nigeria",
                "name_fr": "Nigeria",
                "iso_3166_1": "ng",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 129,
                "name_de": "Nordmazedonien",
                "name_en": "North Macedonia",
                "name_fr": "Macédoine du Nord",
                "iso_3166_1": "mk",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 130,
                "name_de": "Norwegen",
                "name_en": "Norway",
                "name_fr": "Norvège",
                "iso_3166_1": "no",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 131,
                "name_de": "Oman",
                "name_en": "Oman",
                "name_fr": "Oman",
                "iso_3166_1": "om",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 132,
                "name_de": "Pakistan",
                "name_en": "Pakistan",
                "name_fr": "Pakistan",
                "iso_3166_1": "pk",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 133,
                "name_de": "Palau",
                "name_en": "Palau",
                "name_fr": "Palaos",
                "iso_3166_1": "pw",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 134,
                "name_de": "Panama",
                "name_en": "Panama",
                "name_fr": "Panama",
                "iso_3166_1": "pa",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 135,
                "name_de": "Papua-Neuguinea",
                "name_en": "Papua New Guinea",
                "name_fr": "Papouasie-Nouvelle-Guinée",
                "iso_3166_1": "pg",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 136,
                "name_de": "Paraguay",
                "name_en": "Paraguay",
                "name_fr": "Paraguay",
                "iso_3166_1": "py",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 137,
                "name_de": "Peru",
                "name_en": "Peru",
                "name_fr": "Pérou",
                "iso_3166_1": "pe",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 138,
                "name_de": "Philippinen",
                "name_en": "Philippines",
                "name_fr": "Philippines",
                "iso_3166_1": "ph",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 139,
                "name_de": "Polen",
                "name_en": "Poland",
                "name_fr": "Pologne",
                "iso_3166_1": "pl",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 140,
                "name_de": "Portugal",
                "name_en": "Portugal",
                "name_fr": "Portugal",
                "iso_3166_1": "pt",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 141,
                "name_de": "Katar",
                "name_en": "Qatar",
                "name_fr": "Qatar",
                "iso_3166_1": "qa",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 142,
                "name_de": "Rumänien",
                "name_en": "Romania",
                "name_fr": "Roumanie",
                "iso_3166_1": "ro",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 143,
                "name_de": "Russland",
                "name_en": "Russian Federation",
                "name_fr": "Russie",
                "iso_3166_1": "ru",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 144,
                "name_de": "Ruanda",
                "name_en": "Rwanda",
                "name_fr": "Rwanda",
                "iso_3166_1": "rw",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 145,
                "name_de": "St. Kitts und Nevis",
                "name_en": "Saint Kitts and Nevis",
                "name_fr": "Saint-Christophe-et-Niévès",
                "iso_3166_1": "kn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 146,
                "name_de": "St. Lucia",
                "name_en": "Saint Lucia",
                "name_fr": "Sainte-Lucie",
                "iso_3166_1": "lc",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 147,
                "name_de": "St. Vincent und die Grenadinen",
                "name_en": "Saint Vincent and the Grenadines",
                "name_fr": "Saint-Vincent-et-les-Grenadines",
                "iso_3166_1": "vc",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 148,
                "name_de": "Samoa",
                "name_en": "Samoa",
                "name_fr": "Samoa",
                "iso_3166_1": "ws",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 149,
                "name_de": "San Marino",
                "name_en": "San Marino",
                "name_fr": "Saint-Marin",
                "iso_3166_1": "sm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 150,
                "name_de": "São Tomé und Príncipe",
                "name_en": "Sao Tome and Principe",
                "name_fr": "Sao Tomé-et-Principe",
                "iso_3166_1": "st",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 151,
                "name_de": "Saudi-Arabien",
                "name_en": "Saudi Arabia",
                "name_fr": "Arabie saoudite",
                "iso_3166_1": "sa",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 152,
                "name_de": "Senegal",
                "name_en": "Senegal",
                "name_fr": "Sénégal",
                "iso_3166_1": "sn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 153,
                "name_de": "Serbien",
                "name_en": "Serbia",
                "name_fr": "Serbie",
                "iso_3166_1": "rs",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 154,
                "name_de": "Seychellen",
                "name_en": "Seychelles",
                "name_fr": "Seychelles",
                "iso_3166_1": "sc",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 155,
                "name_de": "Sierra Leone",
                "name_en": "Sierra Leone",
                "name_fr": "Sierra Leone",
                "iso_3166_1": "sl",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 156,
                "name_de": "Singapur",
                "name_en": "Singapore",
                "name_fr": "Singapour",
                "iso_3166_1": "sg",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 157,
                "name_de": "Slowakei",
                "name_en": "Slovakia",
                "name_fr": "Slovaquie",
                "iso_3166_1": "sk",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 158,
                "name_de": "Slowenien",
                "name_en": "Slovenia",
                "name_fr": "Slovénie",
                "iso_3166_1": "si",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 159,
                "name_de": "Salomonen",
                "name_en": "Solomon Islands",
                "name_fr": "Salomon",
                "iso_3166_1": "sb",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 160,
                "name_de": "Somalia",
                "name_en": "Somalia",
                "name_fr": "Somalie",
                "iso_3166_1": "so",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 161,
                "name_de": "Südafrika",
                "name_en": "South Africa",
                "name_fr": "Afrique du Sud",
                "iso_3166_1": "za",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 162,
                "name_de": "Südsudan",
                "name_en": "South Sudan",
                "name_fr": "Soudan du Sud",
                "iso_3166_1": "ss",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 163,
                "name_de": "Spanien",
                "name_en": "Spain",
                "name_fr": "Espagne",
                "iso_3166_1": "es",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 164,
                "name_de": "Sri Lanka",
                "name_en": "Sri Lanka",
                "name_fr": "Sri Lanka",
                "iso_3166_1": "lk",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 165,
                "name_de": "Sudan",
                "name_en": "Sudan",
                "name_fr": "Soudan",
                "iso_3166_1": "sd",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 166,
                "name_de": "Suriname",
                "name_en": "Suriname",
                "name_fr": "Suriname",
                "iso_3166_1": "sr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 167,
                "name_de": "Schweden",
                "name_en": "Sweden",
                "name_fr": "Suède",
                "iso_3166_1": "se",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 168,
                "name_de": "Schweiz",
                "name_en": "Switzerland",
                "name_fr": "Suisse",
                "iso_3166_1": "ch",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 169,
                "name_de": "Syrien",
                "name_en": "Syrian Arab Republic",
                "name_fr": "Syrie",
                "iso_3166_1": "sy",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 170,
                "name_de": "Tadschikistan",
                "name_en": "Tajikistan",
                "name_fr": "Tadjikistan",
                "iso_3166_1": "tj",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 171,
                "name_de": "Tansania",
                "name_en": "Tanzania, United Republic of",
                "name_fr": "Tanzanie",
                "iso_3166_1": "tz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 172,
                "name_de": "Thailand",
                "name_en": "Thailand",
                "name_fr": "Thaïlande",
                "iso_3166_1": "th",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 173,
                "name_de": "Osttimor",
                "name_en": "Timor-Leste",
                "name_fr": "Timor oriental",
                "iso_3166_1": "tl",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 174,
                "name_de": "Togo",
                "name_en": "Togo",
                "name_fr": "Togo",
                "iso_3166_1": "tg",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 175,
                "name_de": "Tonga",
                "name_en": "Tonga",
                "name_fr": "Tonga",
                "iso_3166_1": "to",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 176,
                "name_de": "Trinidad und Tobago",
                "name_en": "Trinidad and Tobago",
                "name_fr": "Trinité-et-Tobago",
                "iso_3166_1": "tt",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 177,
                "name_de": "Tunesien",
                "name_en": "Tunisia",
                "name_fr": "Tunisie",
                "iso_3166_1": "tn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 178,
                "name_de": "Türkei",
                "name_en": "Turkey",
                "name_fr": "Turquie",
                "iso_3166_1": "tr",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 179,
                "name_de": "Turkmenistan",
                "name_en": "Turkmenistan",
                "name_fr": "Turkménistan",
                "iso_3166_1": "tm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 180,
                "name_de": "Tuvalu",
                "name_en": "Tuvalu",
                "name_fr": "Tuvalu",
                "iso_3166_1": "tv",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 181,
                "name_de": "Uganda",
                "name_en": "Uganda",
                "name_fr": "Ouganda",
                "iso_3166_1": "ug",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 182,
                "name_de": "Ukraine",
                "name_en": "Ukraine",
                "name_fr": "Ukraine",
                "iso_3166_1": "ua",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 183,
                "name_de": "Vereinigte Arabische Emirate",
                "name_en": "United Arab Emirates",
                "name_fr": "Émirats arabes unis",
                "iso_3166_1": "ae",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 184,
                "name_de": "Vereinigtes Königreich",
                "name_en": "United Kingdom of Great Britain and Northern Ireland",
                "name_fr": "Royaume-Uni",
                "iso_3166_1": "gb",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 185,
                "name_de": "Vereinigte Staaten",
                "name_en": "United States of America",
                "name_fr": "États-Unis",
                "iso_3166_1": "us",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 186,
                "name_de": "Uruguay",
                "name_en": "Uruguay",
                "name_fr": "Uruguay",
                "iso_3166_1": "uy",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 187,
                "name_de": "Usbekistan",
                "name_en": "Uzbekistan",
                "name_fr": "Ouzbékistan",
                "iso_3166_1": "uz",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 188,
                "name_de": "Vanuatu",
                "name_en": "Vanuatu",
                "name_fr": "Vanuatu",
                "iso_3166_1": "vu",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 189,
                "name_de": "Venezuela",
                "name_en": "Venezuela (Bolivarian Republic of)",
                "name_fr": "Venezuela",
                "iso_3166_1": "ve",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 190,
                "name_de": "Vietnam",
                "name_en": "Viet Nam",
                "name_fr": "Viêt Nam",
                "iso_3166_1": "vn",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 191,
                "name_de": "Jemen",
                "name_en": "Yemen",
                "name_fr": "Yémen",
                "iso_3166_1": "ye",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 192,
                "name_de": "Sambia",
                "name_en": "Zambia",
                "name_fr": "Zambie",
                "iso_3166_1": "zm",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            },
            {
                "id": 193,
                "name_de": "Simbabwe",
                "name_en": "Zimbabwe",
                "name_fr": "Zimbabwe",
                "iso_3166_1": "zw",
                "created_at": "2021-06-07 09:50:13",
                "updated_at": "2021-06-07 09:50:13"
            }
        ]
        EOT;
    }
};
