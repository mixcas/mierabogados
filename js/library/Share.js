Share = {
  onFB: function() {
    FB.ui({
      method: 'share',
      href: document.URL,
    }, function(response){});
  },
  onTW: function(){
    window.open("https://twitter.com/intent/tweet?url="+encodeURIComponent(document.URL)+"&text="+encodeURIComponent(document.title)+ "&count=none/", "", "height=300, width=550, resizable=1");
    return true;
  }
}
