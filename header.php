<div>
        
        <?php if($home !== 'home'){ ?>
        <div class="image-h" id="image-h" style="background-color: var(--Navbarcolor);">
            <img src="<?=$cdn_url ?><?=$ima_ge ?>.webp" width="100%" height="100%" fetchpriority="low" preload="none" alt="Goa escorts service">
        </div>
        <?php }else{ ?>
            
            <header style="display: block;background:#ef0000">
            <div class="header-image">
               
                <div>
                    <strong>Call Girls In Lucknow</strong><br><p style="padding: 0;margin:0;font-size:1.1rem">Escort Service in Lucknow</p>
                </div>
            </div>
        </header>    
        <?php } ?>

<?php if($header == 'varanasi'){ ?>
    <nav>
            <ul id="menu">
                <li id="li" class="active"><a href=""><button>Home</button></a></li>
                <li id="li"><a href=""><button>Lanka</button></a></li>
                <li id="li"><a href=""><button>Pandey Pur</button></a></li>
                <li id="li"><a href=""><button>Chet Ganj</button></a></li>
                <li id="li"><a href=""><button>Sigra</button></a></li>
                <li id="li"><a href=""><button>Post Ad</button></a></li>                
        </nav>
<?php
}else{ ?>

        <nav>
            <ul id="menu">
                <li id="li" class="active"><a href="<?=get_url() ?>"><button>Home</button></a></li>
                <li id="li"><a href="<?=get_url() ?>call-girls-in-gomti-nagar/"><button>Gomti Nagar</button></a></li>
                <li id="li"><a href="<?=get_url() ?>call-girls-in-hazratganj/"><button>HazratGanj</button></a></li>
                <li id="li"><a href="<?=get_url() ?>call-girls-in-charbagh/"><button>Charbagh</button></a></li>
                <li id="li"><a href="<?=get_url() ?>call-girls-in-indira-nagar/"><button>Indira Nagar</button></a></li>
                <li id="li"><a href="<?=get_url() ?>call-girls-in-amausi/"><button>Amausi</button></a></li>
                <li id="li"><a href="<?=get_url() ?>contact-us/"><button>Post Ad</button></a></li>                
        </nav><?php } ?>
    </div>
    <!-- <?=get_url() ?>escorts-in-novotel-hotel/ -->