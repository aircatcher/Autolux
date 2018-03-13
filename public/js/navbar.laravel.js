$(".card").hover(function()
{
    $(".card-header").css(
    {
      "background": "#7E8994"
    });
    $(".card-body").css(
    {
      "background": "#ECEEF0"
    });
});

$(".card").mouseleave(function()
{
    $(".card-header").css(
    {
      "background": "#969FA8"
    });
    $(".card-body").css(
    {
      "background": "#DDE0E3"
    });
});