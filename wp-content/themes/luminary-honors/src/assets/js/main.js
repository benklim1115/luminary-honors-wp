//public script

//testing if js is working within site
document.addEventListener('DOMContentLoaded', function() {

    alert("Hello there? is this working?");
    
    $(window).scroll(function () {

        const observer = new IntersectionObserver(entries => {
            // Loop over the entries
            entries.forEach(entry => {
                // If the element is visible
                if (window.scrollY >= 675) {
                    //if (entry.isIntersecting) {
                    // Add the animation class
                    entry.target.classList.add('flame-wobble');
                    return;
                }
    
            });
        });
    
        observer.observe(document.querySelector('.flame'));
    
    });
    
    $(window).scroll(function () {
    
        const observer = new IntersectionObserver(entries => {
            // Loop over the entries
            entries.forEach(entry => {
                // If the element is visible
                if (entry.isIntersecting) {
                    // Hide the match and text
                    document.querySelector('.match-container').classList.add('flame-hide');
                    document.querySelector('.text-container').classList.add('flame-hide');
                    document.querySelector('.text-container-2').classList.add('flame-hide');
                    document.querySelector('.flame-container').classList.add('flame-hide');
    
                }
    
            });
        });
    
        observer.observe(document.querySelector('#logo-container'));
    
        if (window.innerHeight + window.scrollY >= document.body.clientHeight - 1) {
            //if at bottom of the page, hide the previous containers to just display info
            document.querySelector('.flame-section').classList.add('hide');
            console.log("Bottom of page, deleting flame section");
    
        }
    });
});

