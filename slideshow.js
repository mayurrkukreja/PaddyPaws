function change() {
    var img_arr = [
      "https://source.unsplash.com/720x420/?pet",
      "https://source.unsplash.com/720x420/?birds",
      "https://source.unsplash.com/720x420/?pets"
    ];
  
    var left = document.getElementById("left-blured-img");
    var main = document.getElementById("main-img");
    var right = document.getElementById("right-blured-img");
  
    var index = 0;
  
    setInterval(() => {
      if (index < img_arr.length - 2) {
        left.src = img_arr[index];
        main.src = img_arr[index + 1];
        right.src = img_arr[index + 2];
      } else if (index == img_arr.length - 2) {
        left.src = img_arr[index];
        main.src = img_arr[index + 1];
        right.src = img_arr[0];
      } else if (index == img_arr.length - 1) {
        left.src = img_arr[index];
        main.src = img_arr[0];
        right.src = img_arr[1];
      } else if (index == img_arr.length) {
        index = 0;
        left.src = img_arr[index];
        main.src = img_arr[index + 1];
        right.src = img_arr[index + 2];
      }
  
      index++;
    }, 3000);
  }
  
  change();
  