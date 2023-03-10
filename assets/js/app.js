// Add a dropshadow to top menu when scrolled
function topMenuScrollShadow() {
    let scrollTop = window.pageYOffset;
    const topMenu = document.querySelector('#site-navigaion');
    window.addEventListener('scroll', function() {
        scrollTop = window.pageYOffset;
        if(scrollTop >= 20) {
            topMenu.classList.add('highlight');
        }
        if(scrollTop < 20) {
            topMenu.classList.remove('highlight');
        }
    });
}

// Toggle mobile menu
function mobileMenuToggle(e) {
  const menu = document.querySelector('#navigation');
  const toggle = e;
  menu.classList.toggle('active');
}

// Toggle floating carbon ad
function carbonAdToggle(e) {
  const toggle = e;
  const adElement = document.querySelector('#carbonAd');
  const totopElement = document.querySelector('#totop');
  const footerElement = document.querySelector('footer');
  totopElement.style.bottom = 0;
  adElement.style.display = 'none';
  footerElement.style.paddingBottom = '3rem';
}

// Copy Colors
function copy(hex,target) {
    setTimeout(function() {
        $('#check').remove();
    },2000);
    $(target).children('.hex').hide();
    $(target).append("<span class='check' id='check'>&#10003;</span>");
    $(target).children('.hex').delay(2000).show(0);
    const input = document.createElement('input');
    input.setAttribute('value',hex);
    document.body.appendChild(input);
    input.select();
    const result = document.execCommand('copy');
    document.body.removeChild(input);
    return result;
}

// HEX to RBG
function hexToRgb(hex) {
    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;

    return r + "," + g + "," + b;
}

// Scroll to top
function scrollToTop() {
  window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
  });
}

// Check Likes from Local storage
function checkLikes() {
    const palettes = document.querySelectorAll('.palette');
    const primaryLike = document.querySelector('.primary-like');
    let primaryLikeId;
    if(primaryLike) {
        primaryLikeId = parseInt(primaryLike.id.replace("like-", ""));
    }
    const likedPalettes = JSON.parse("[" + localStorage.getItem('likeColors') + "]");
    // Check likes on palette page
    if (primaryLike) {
       if (likedPalettes.includes(primaryLikeId)) {
           if (primaryLike != "") {
               primaryLike.classList.add('liked');
           }
       } 
    }
    
    // Check likes on homepage, scroll and search
    for (let i = 0; i < palettes.length; ++i) {
        paletteElement = palettes[i].parentElement
        paletteID = paletteElement.id;
        let likeButton = paletteElement.querySelector('.likes');
        if (likedPalettes.includes(parseInt(paletteID))) {
            paletteElement.classList.add('liked');
            likeButton.classList.add('liked');
        }  
    }
}

// Like function
function like(e) {
    
    const paletteElement = e.parentElement.parentElement.parentElement.parentElement;
    let paletteID = e.id;
    paletteID = parseInt(paletteID.replace("like-", ""));
    const likeContainer = e.querySelector('.like-count');
    let likes = parseInt(likeContainer.innerHTML);
    let likedPalettes = localStorage.getItem('likeColors');
    
    // Read local storage
    if(likedPalettes === null) {
        likedPalettes = [];
    } else {
        likedPalettes = JSON.parse("[" + likedPalettes + "]");
    }
    
    // Prepare post 
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "/_inc/_like.php");
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/json");
    // xhr.onreadystatechange = function () {
    //     if (xhr.readyState === 4) {
    //         // console.log(xhr.status);
    //         // console.log(xhr.responseText);
    //     }
    // };
    
    // Increment
    if (e.classList.contains('liked') == false) {
        likes = likes+1;
        paletteElement.classList.add('liked');
        e.classList.add('liked');
        likeContainer.innerHTML = likes;
        
        likedPalettes.push(paletteID);
        localStorage.setItem('likeColors', likedPalettes);
        
        // Post data
        let data = `{
            "palette": ${paletteID},
            "action": "increment"
        }`;
        xhr.send(data);
    } 
    
    // Decrement
    else {
        likes = likes-1;
        paletteElement.classList.remove('liked');
        e.classList.remove('liked');
        likeContainer.innerHTML = likes;
        
        const index = likedPalettes.indexOf(paletteID);
        if (index > -1) {
            likedPalettes.splice(index, 1);
        }
        localStorage.setItem('likeColors', likedPalettes);
        
        // Post data
        let data = `{
            "palette": ${paletteID},
            "action": "decrement"
        }`;
        xhr.send(data);
    }

}



// run app
topMenuScrollShadow();
checkLikes();