<?php
include("../_inc/_app.php");
$cd = new ColorDrop;
include("../_inc/_functions.php");
include("../_inc/header.php");

$totalQuery= $cd->DatabasePrepareQuery('SELECT COUNT(*) as count FROM palettes', array());
foreach ($totalQuery as $total) {
    $totalIDs = $total['count'];
}
$randomID = (rand(1,$totalIDs));
?>

<body id="palettes">

<?php include("../_inc/navigation.php"); ?>

<header id="header" class="row center-tiny">
    <div class="tiny">
        <h1 class="linear-wipe funky" style="font-size: 5rem;">Your Favourite colors</h1>
    </div>
</header>

<main id="main">
    <div class="row" id="liked-palettes">
        <!-- BuySellAds START -->
        <div class="tiny-12 small-8 medium-6 large-4 wide-2">
            <div id="wall-js"></div>
        </div>
            
        <!-- BuySellAds END -->
    <?php foreach ($cd->DatabasePrepareQuery('SELECT * FROM palettes ORDER BY created DESC', array()) as $palette) { ?>
        <div id="<?php echo $palette['id'];?>" class="palette-container tiny-6 small-4 medium-3 large-2 wide-1">
            <div class="palette">
                <div class="colors">
                    <?php foreach ($cd->DatabasePrepareQuery('SELECT * FROM colors WHERE palette = ?', array($palette['id'])) as $color) { ?>
                        <div onclick="copy('<?php echo $color['hex']; ?>', this)" id="<?php echo $color['id']; ?>" class="color" style="background-color: <?php echo $color['hex']; ?>">
                            <span class="hex"><?php echo $color['hex']; ?></span>
                        </div>
                    <?php } ?>
                </div>
                <div class="footer">
                    <div class="left">
                        <button id="like-<?php echo $palette['id'];?>" class="likes" onclick="like(this)">
                            <svg class="heart" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <title>heart</title>
                                <path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
                            </svg>
                            <span class="like-count">
                                <?php echo $cd->DatabasePrepareQueryReturnFirstField( "SELECT likes FROM likes WHERE palette = ?", array($palette['id']))[0];?>
                            </span>
                        </button>
                        <a class="view" href="/palette/?id=<?php echo $palette['id'];?>">
                            <svg class="eye" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <title>eye</title>
                                <path d="M16 6c-6.979 0-13.028 4.064-16 10 2.972 5.936 9.021 10 16 10s13.027-4.064 16-10c-2.972-5.936-9.021-10-16-10zM23.889 11.303c1.88 1.199 3.473 2.805 4.67 4.697-1.197 1.891-2.79 3.498-4.67 4.697-2.362 1.507-5.090 2.303-7.889 2.303s-5.527-0.796-7.889-2.303c-1.88-1.199-3.473-2.805-4.67-4.697 1.197-1.891 2.79-3.498 4.67-4.697 0.122-0.078 0.246-0.154 0.371-0.228-0.311 0.854-0.482 1.776-0.482 2.737 0 4.418 3.582 8 8 8s8-3.582 8-8c0-0.962-0.17-1.883-0.482-2.737 0.124 0.074 0.248 0.15 0.371 0.228v0zM16 13c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z"></path>
                            </svg>
                        </a>
                    </div>
                    <date class="date"><?php echo timeago($palette['created']);?></date>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</main>

<?php include("../_inc/footer.php"); ?>
<?php include("../_inc/scripts.php"); ?>
<script src="//m.servedby-buysellads.com/monetization.custom.js"></script>
<script src="../assets/js/bsa.min.js"></script>

<script>
  /****************/
  /* Filter Likes */
  /****************/
  const palettes = document.querySelectorAll('.palette-container');
  const palettesCount = palettes.length;
  let removedPalettes = 0;
  
  palettes.forEach((palette) => {
    // console.log(palette);
    if (palette.classList.contains('liked') == false) {
      removedPalettes++;
      palette.remove();
    }
  });
  if (palettesCount == removedPalettes) {
    // Insert Like your first palette element
    const likedContainer = document.querySelector('#liked-palettes');
    
    let newLikeElement = document.createElement("div");
    newLikeElement.setAttribute('id','newLikeContianer');
    newLikeElement.classList.add('tiny-6','small-4','medium-3','large-2','wide-1');
    
    let newLikeLink = document.createElement("a");
    newLikeLink.setAttribute('id','newLikeLink');
    newLikeLink.setAttribute('href','/');
    
    let newLikeText = document.createElement("span");
    newLikeText.innerHTML = 'Add a new palette to your favourites';
    
    newLikeLink.appendChild(newLikeText);
    newLikeElement.appendChild(newLikeLink);
    likedContainer.appendChild(newLikeElement);
  }
</script>