$base_lang="en"; // Set the default language

  if(isset($_COOKIE["lang"])){
   $base_lang=$_COOKIE["lang"]; // Get language from cookie
  }

  if(isset($_GET["lang"])){
    setcookie("lang",strip_tags($_GET["lang"]),strtotime('+30 days'),'/', NULL, 0);
    $base_lang=strip_tags($_GET["lang"]); // Or set cookie and new language
  }
