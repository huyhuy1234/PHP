$('.portfolio button').click(function (e) { 
    const dataValue = $(this).attr(`data`);
    
    const shownDivs = $(`.portfolio . row > div[data=${dataValue}]`);

    const hiddenDivs = $(`.portfolio . row > div[data=${dataValue}]`);
    
});