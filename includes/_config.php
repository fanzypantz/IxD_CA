
<?php
switch ($_SERVER["SCRIPT_NAME"]) {
    case "/contact.php":
        $CURRENT_PAGE = "Contact";
        $PAGE_TITLE = "Contact Us";
        $KEYWORDS = "";
        $DESCRIPTION = "";
        break;
    case "/visit.php":
        $CURRENT_PAGE = "Visit Us";
        $PAGE_TITLE = "Visit Us";
        $KEYWORDS = "";
        $DESCRIPTION = "";
        break;
    case "/exhibitions.php":
        $CURRENT_PAGE = "Exhibitions";
        $PAGE_TITLE = "Our Exhibitions";
        $KEYWORDS = "";
        $DESCRIPTION = "";
        break;
    case "/involvement.php":
        $CURRENT_PAGE = "Involvement";
        $PAGE_TITLE = "Get Involved";
        $KEYWORDS = "";
        $DESCRIPTION = "";
        break;
    default:
        $CURRENT_PAGE = "Index";
        $PAGE_TITLE = "Welcome to your local Community Science Museum";
        $KEYWORDS = "test";
        $DESCRIPTION = "test";
}

const SHOES = [
	[
		'title' => "stoneygate dark tan",
		'tag' => "TAMPONATO CALF LEATHER OXFORD BROGUE",
		'category' => "shoes",
		'subCategory' => "oxford",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 299,
	],
	[
		'title' => "YARFORD COGNAC",
		'tag' => "TAMPONATO CALF LEATHER WHOLECUT",
		'category' => "shoes",
		'subCategory' => "oxford",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 399,
	],
	[
		'title' => "PINZOLO DARK BROWN",
		'tag' => "Hand Antiqued Leather Adelaide Oxford Shoe",
		'category' => "shoes",
		'subCategory' => "oxford",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 299,
	],
	[
		'title' => "YARFORD BLACK",
		'tag' => "Calf Leather Wholecut",
		'category' => "shoes",
		'subCategory' => "oxford",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 399,
	],
	[
		'title' => "EXMINSTER DARK TAN",
		'tag' => "Tamponato Calf Leather Derby Brogue",
		'category' => "shoes",
		'subCategory' => "Brogue",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 299,
	],
	[
		'title' => "STONEYGATE BLUE",
		'tag' => "Tamponato Calf Leather Oxford Brogue",
		'category' => "shoes",
		'subCategory' => "Brogue",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 399,
	],
	[
		'title' => "STONEYGATE DARK TAN",
		'tag' => "Tamponato Calf Leather Oxford Brogue",
		'category' => "shoes",
		'subCategory' => "Brogue",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 399,
	],
	[
		'title' => "STOGUMBER BROWN",
		'tag' => "Suede Derby Brogue Shoe",
		'category' => "shoes",
		'subCategory' => "Brogue",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 399,
	],
	[
		'title' => "PENDOMER BLACK",
		'tag' => "Calf Leather Derby Shoe",
		'category' => "shoes",
		'subCategory' => "Derbies",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 299,
	],
	[
		'title' => "PENDOMER DARK TAN",
		'tag' => "Tamponato Calf Leather Derby Shoe",
		'category' => "shoes",
		'subCategory' => "Derbies",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 299,
	],
	[
		'title' => "STOGUMBER BROWN",
		'tag' => "Suede Derby Brogue Shoe",
		'category' => "shoes",
		'subCategory' => "Derbies",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 299,
	],
	[
		'title' => "STOGUMBER NAVY",
		'tag' => "Suede Derby Brogue Shoe",
		'category' => "shoes",
		'subCategory' => "Derbies",
		'image' => "",
		'sizes' => [6.0, 6.5, 7.0, 7.5, 8.0, 8.5, 9.0, 10.0, 10.5, 11.0, 11.5, 12.0],
		'price' => 399,
	],
];
?>
