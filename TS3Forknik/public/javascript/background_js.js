let cursor = document.querySelector('#cursor');
        let body = document.querySelector('body'); 
        let isHoldingClick = false;

        document.onmousedown = function(e) {
            isHoldingClick = true;
            createAndAppendElement(e);
        }

        document.onmouseup = function() {
            isHoldingClick = false;
        }

        document.onmousemove = function(e){
            if (isHoldingClick) {
                createAndAppendElement(e);
            }
            body.style.backgroundPositionX = e.pageX/-4 + 'px';
            body.style.backgroundPositionY = e.pageY/-4 + 'px';
        }