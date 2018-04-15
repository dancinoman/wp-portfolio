var body = $("body");
var brigntnessOrigin = "opacity(35%)"

// When user pass over with mouse

body.on("mouseover", ".portfolio-content", function(){
  $(this).find("img").css({
    "transform":"scale(1.5, 1.5)",
    "-ms-transform":"scale(1.5, 1.5)",
    "-webkit-transform": "scale(1.5, 1.5)",
    "z-index": "5"
  });
  $(this).children(".content-cover").css("filter", "opacity(0%)");
}).on("mouseleave", ".portfolio-content", function(){
  $(this).find("img").css({
    "transform":"scale(1, 1)",
    "-ms-transform":"scale(1, 1)",
    "-webkit-transform": "scale(1, 1)",
    "z-index": "-1"
  });
  $(this).children(".content-cover").css("filter", brigntnessOrigin);
});
