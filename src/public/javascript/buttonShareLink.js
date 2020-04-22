let buttonShare = document.getElementById('btn-share');
let contShare = document.querySelectorAll('.cont-share_link');

buttonShare.onclick = function() {
        buttonShare.remove();
        
        let link_twitter = document.createElement('button');
        let link_facebook = document.createElement('button');
        link_twitter.innerHTML = "twitter";
        contShare.append(link_twitter);
        contShare.append(link_facebook);

    
}

