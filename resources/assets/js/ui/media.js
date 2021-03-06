UI.Media = (function () {
  var mediaBrowserButton;
  var mediaItemHolder;
  var mediaLoad = new Event('mediaload');

  var loadChosenMedia = function () {
    mediaItemHolder.innerHTML = '';
    
    for (let mediaIndex = 0; mediaIndex < VIEW.selectedMedia.length; mediaIndex++) {
      var mediaItem = VIEW.MediaBrowser.createMediaItem(
        VIEW.selectedMedia[mediaIndex].id,
        VIEW.selectedMedia[mediaIndex].url
      );

      mediaItemHolder.appendChild(mediaItem);
    }
  };

  var events = function () {
    document.addEventListener('mediachosen', loadChosenMedia, false);

    window.addEventListener('load', function () {
      document.dispatchEvent(mediaLoad);
    }, false);
  };

  return {
    loadChosenMedia: loadChosenMedia,
    init: function () {
      mediaBrowserButton = document.getElementById('modal-mediabrowser-open');
      mediaItemHolder = document.getElementById('media-item-holder');

      if (mediaBrowserButton === null || mediaBrowserButton === undefined) {
        return;
      }

      events();
    }
  };
})();