<!DOCTYPE html>
<html lang="en">
<head>
    
    <style> 
	
	
.rf-btn,
.rf-btn:active,
.rf-btn:hover,
.rf-btn:link,
.rf-btn:visited,
a,
a:active,
a:focus,
a:hover,
a:visited {
	text-decoration: none!important
}

.rf-btn.blue,
.rf-btn.blue:hover {
	box-shadow: 0 3px 16px 0 rgba(56, 125, 255, .5)
}

.rf-btn,
.rf-rectangle-btn {
	display: inline-block;
	font-weight: 400;
	color: #fff;
	cursor: pointer
}

.nav-item-link .rf-caret,
.rf-caret,
.triangle-wrap {
	pointer-events: none
}

address,
body,
figure,
h1,
h2,
h3,
h4,
h5,
h6,
li,
p,
ul {
	margin: 0;
	padding: 0
}


.rf-btn {
	padding: 0 45px;
	height: 60px;
	line-height: 60px;
	border-radius: 38px;
	font-size: 18px;
	transition: all .2s linear;
	font-family: Montserrat, "Open Sans", sans-serif;
	text-transform: uppercase;
	border: none;
	background-repeat: no-repeat!important
}

.rf-btn.small {
	padding: 0 20px;
	height: 40px;
	line-height: 40px;
	font-size: 14px
}

.rf-btn.md {
	height: 50px;
	line-height: 50px;
	font-size: 18px;
	padding: 0 36px
}

.rf-btn.blue {
	background-image: linear-gradient(-179deg, #5690ff 0, #387dff 97%);
	color: #fff
}

.rf-btn.blue:hover {
	background-image: linear-gradient(-179deg, #6ea0ff 5%, #518dff 97%);
	color: #fff
}

.rf-btn.blue:active {
	background-image: linear-gradient(-179deg, #4d88f9 0, #206cfd 96%)
}

.rf-rectangle-btn {
	background: linear-gradient(180deg, #5690ff 0, #387dff 100%);
	box-shadow: 0 3px 9px rgba(56, 125, 255, .2);
	border-radius: 10px;
	transition: all .1s linear;
	text-decoration: none;
	border: none;
	white-space: nowrap;
	background-repeat: no-repeat;
	user-select: none
}

.change-lang-wrapper:hover .rf-caret:after,
.rf-caret.blue:after {
	border-color: currentColor
}

.rf-rectangle-btn:hover {
	box-shadow: 0 3px 16px 0 rgba(56, 125, 255, .5);
	background-image: linear-gradient(-179deg, #6ea0ff 5%, #518dff 97%);
	color: #fff
}

.rf-rectangle-btn:active {
	background-image: linear-gradient(-179deg, #4d88f9 0, #206cfd 96%)
}

.rf-rectangle-btn.rf-40 {
    margin-left: 25px;
	height: 40px;
	line-height: 40px;
	padding: 0 20px;
	font-size: 14px
}

@keyframes fadeIn {
	0% {
		opacity: 0
	}
	100% {
		opacity: 1
	}
}

@keyframes translate-out {
	0% {
		transform: scale(1, 1);
		opacity: 0
	}
	100% {
		transform: scale(1, 0);
		opacity: 1
	}
}

.fade-in,
.main-nav-item:hover .rf-active-border {
	opacity: 1
}

.fade-in {
	animation: fadeIn .5s
}

.translate-effects-out {
	animation: translate-out .7s ease
}

@media only screen and (min-width:1301px) {
	html[lang=ar] .rf-main-logo {
		width: 180px
	}
	html[lang=ar] .brand-logo-img .logo-xs {
		display: none
	}
}

@media only screen and (max-width:1300px) {
	html[lang=ar] .rf-main-logo {
		height: 40px
	}
	html[lang=ar] .brand-logo-img .logo-lg {
		display: none
	}
}

@media only screen and (min-width:1521px) {
	html[lang=ja] .rf-main-logo {
		width: 180px
	}
	html[lang=ja] .brand-logo-img .logo-xs {
		display: none
	}
}

@media only screen and (max-width:1520px) {
	html[lang=ja] .rf-main-logo {
		height: 40px
	}
	html[lang=ja] .brand-logo-img .logo-lg {
		display: none
	}
}

@media only screen and (min-width:1441px) {
	html[lang=en] .rf-main-logo {
		width: 180px
	}
	html[lang=en] .brand-logo-img .logo-xs {
		display: none
	}
	html[lang=pt] .rf-main-logo {
		width: 180px
	}
	html[lang=pt] .brand-logo-img .logo-xs {
		display: none
	}
}

@media only screen and (max-width:1440px) {
	html[lang=en] .rf-main-logo {
		height: 40px
	}
	html[lang=en] .brand-logo-img .logo-lg {
		display: none
	}
	html[lang=pt] .rf-main-logo {
		height: 40px
	}
	html[lang=pt] .brand-logo-img .logo-lg {
		display: none
	}
}

@media only screen and (min-width:1541px) {
	html[lang=ru] .rf-main-logo {
		width: 180px
	}
	html[lang=ru] .brand-logo-img .logo-xs {
		display: none
	}
}

@media only screen and (max-width:1540px) {
	html[lang=ru] .rf-main-logo {
		height: 40px
	}
	html[lang=ru] .brand-logo-img .logo-lg {
		display: none
	}
}

@media only screen and (min-width:1581px) {
	html[lang=de] .rf-main-logo {
		width: 180px
	}
	html[lang=de] .brand-logo-img .logo-xs {
		display: none
	}
}

@media only screen and (max-width:1580px) {
	html[lang=de] .rf-main-logo {
		height: 40px
	}
	html[lang=de] .brand-logo-img .logo-lg {
		display: none
	}
}

@media only screen and (min-width:1601px) {
	html[lang=fr] .rf-main-logo {
		width: 180px
	}
	html[lang=fr] .brand-logo-img .logo-xs {
		display: none
	}
}

@media only screen and (max-width:1600px) {
	html[lang=fr] .rf-main-logo {
		height: 40px
	}
	html[lang=fr] .brand-logo-img .logo-lg {
		display: none
	}
}

@media only screen and (min-width:1471px) {
	html[lang=es] .rf-main-logo {
		width: 180px
	}
	html[lang=es] .brand-logo-img .logo-xs {
		display: none
	}
}

@media only screen and (max-width:1470px) {
	html[lang=es] .rf-main-logo {
		height: 40px
	}
	html[lang=es] .brand-logo-img .logo-lg {
		display: none
	}
}

@media only screen and (min-width:1401px) {
	html[lang=tr] .rf-main-logo {
		width: 180px
	}
	html[lang=tr] .brand-logo-img .logo-xs {
		display: none
	}
}

@media only screen and (max-width:1400px) {
	html[lang=tr] .rf-main-logo {
		height: 40px
	}
	html[lang=tr] .brand-logo-img .logo-lg {
		display: none
	}
}

body:not(.user-is-tabbing) a,
body:not(.user-is-tabbing) button {
	outline: 0!important
}

a:not(:disabled):not(.disabled),
button:not(:disabled):not(.disabled) {
	cursor: pointer
	
}

.freeze-scroll {
	position: fixed!important;
	left: 0;
	right: 0;
	width: 100%;
	max-width: 100%
}

.flag-icon {
	width: 30px;
	height: 20px;
	box-shadow: 0 2px 4px rgba(8, 41, 137, .149)
}

@media screen and (min-width:1151px) {
	.flag-icon {
		display: none
	}
}

@media screen and (max-width:1150px) {
	html[dir=ltr] .rf-lang {
		margin-left: 10px
	}
	html[dir=rtl] .rf-lang {
		margin-right: 10px
	}
}

.change-lang-wrapper:hover .current-lang {
	color: var(--text-hover-color)
}

.change-lang-wrapper.ar .lang-item-az .country-flag {
	margin: 0 0 0 10px
}

button,
input,
textarea {
	font-family: inherit
}

.lang-item-az .country-flag-az{
	background-image: url(https://hostaring.com/img/flag/az.svg);
	width: 30px;
	height: 20px;
	margin: 0 10px 0 0
}
.lang-item-tr .country-flag-tr {
	background-image: url(https://hostaring.com/img/flag/tr.svg);
	width: 30px;
	height: 20px;
	margin: 0 10px 0 0
}
.lang-item-en .country-flag-en {
	background-image: url(https://hostaring.com/img/flag/en.svg);
	width: 27px;
	height: 20px;
	margin: 0 10px 0 0
}
.lang-item-ru .country-flag-ru {
	background-image: url(https://hostaring.com/img/flag/ru.svg);
	width: 30px;
	height: 20px;
	margin: 0 10px 0 0
}

.lang-item- .country-flag.az {
}

.lang-item- .country-flag.tr {
}

.lang-item- .country-flag.en {
}

.lang-item- .country-flag.ru {
}


body.scroll-off {
	overflow: hidden
}

.current-lang,
.explore-icon-name,
.user-account-name {
	padding: 0
}

.tablet-nav {
	display: none;
	align-self: stretch
}

.tablet-nav__menu {
	display: flex;
	padding: 0;
	list-style-type: none
}

.tablet-nav__menu__item {
	display: flex
}

.tablet-nav__menu__item+.tablet-nav__menu__item {
	margin: 0 0 0 24px
}

@media only screen and (min-width:601px) and (max-width:767px) {
	.tablet-nav__menu__item+.tablet-nav__menu__item {
		margin: 0 0 0 20px
	}
}

.tablet-nav__menu__item+.tablet-nav__menu__item.rf-ar {
	margin: 0 24px 0 0
}

.tablet-nav__menu__item--with-border {
	position: relative
}

.tablet-nav__menu__item--with-border.rf-ar::after {
	right: auto;
	left: -12px
}

.tablet-nav__menu__item--with-border::after {
	content: "";
	position: absolute;
	right: -12px;
	top: 50%;
	transform: translateY(-50%);
	display: block;
	height: 30px;
	width: 1px;
	background: #cfe0ff
}

@media only screen and (min-width:601px) and (max-width:767px) {
	.tablet-nav__menu__item+.tablet-nav__menu__item.rf-ar {
		margin: 0 20px 0 0
	}
	.tablet-nav__menu__item--with-border.rf-ar::after {
		left: -10px
	}
	.tablet-nav__menu__item--with-border::after {
		right: -10px
	}
}

.tablet-nav__menu__item__text {
	font-size: 14px;
	font-weight: 500;
	line-height: 60px;
	color: var(--tablet-text);
	white-space: nowrap
}

.tablet-nav__menu__item__text:hover {
	color: #7683a8
}

.tablet-nav__menu__item__text.active,
.tablet-nav__menu__item__text.active:hover {
	color: #252e48
}

@media only screen and (min-width:768px) and (max-width:1150px) {
	.tablet-nav {
		display: flex
	}
}

.text-create:hover {
	color: #545f7e
}

.text-capitalize {
	text-transform: capitalize
}

.rf-caret {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	width: 20px;
	height: 20px;
	transition: transform .3s ease, border-color .2s linear;
	transform: translateY(-1px)
}

.rf-caret.is-menu-open {
	transform: rotate(180deg) translateY(-1px)
}

.rf-caret.white:after {
	border-color: #fff
}

.rf-caret:after {
	content: "";
	transform: rotate(45deg);
	border: var(--text-color) solid;
	border-width: 0 2px 2px 0;
	padding: 2px;
	transition: inherit
}

@media only screen and (max-width:1150px) {
	.rf-caret:after {
		border-color: var(--text-hover-color)
	}
}

.main-header {
	--bg-color: #fff;
	--text-color: #06f;
	--text-hover-color: #06f;
	--user-text-color: #387dff;
	--user-text-hover-color: #004bd6;
	--logo-icon-color-start: #5690ff;
	--logo-icon-color-end: #0052e0;
	--logo-text-color: #363f5a;
	--user-color: #4e5a81;
	--tablet-text: #545f7e;
	position: relative;
	width: 100%;
	height: 60px;
	-webkit-overflow-scrolling: touch;
	background-color: var(--bg-color);
	z-index: 100;
	transition: all .2s linear
}

@media only screen and (min-width:1150px) and (min-width:1301px) {
	.main-header.transparent {
	}
}

@media only screen and (min-width:1150px) {

	.main-header.transparent {
		--bg-color: rgba(0, 0, 0, 0);
		--text-color: #206cfd;
		--user-color: #fff;
		--text-hover-color: #06f;
		--user-text-color: var(--text-color);
		--user-text-hover-color: var(--text-hover-color);
		--logo-icon-color-start: var(--text-color);
		--logo-icon-color-end: var(--text-color);
		--logo-text-color: var(--text-color);
		--tablet-text: #fff
	}
	.main-header.transparent .sign-in-btn {
		background: 0 0;
		box-shadow: none;
		padding: 0;
		font-weight: 500
	}
	.main-header.transparent .user-icon {
		border: 1px solid #fff
	}
	.main-header.transparent .account-btn-wrap {
		background: rgba(27, 85, 216, .2)!important
	}
	.main-header.transparent .user-menu-dropdown {
		top: 55px
	}
}

@media only screen and (max-width:1149px) {
	.main-header {
		box-shadow: 0 6px 6px rgba(0, 82, 224, .1);
		--tablet-text: #545f7e
	}
}

.main-header.with-submenu {
	margin-bottom: 50px
}

.main-header *> {
	font-family: Montserrat, "Open Sans", sans-serif!important
}

.main-header.fixed {
	position: fixed;
	top: 0;
	left: 0
}

@media only screen and (min-width:1021px) {
	.main-header.rf-promo-space-top {
		transform: translateY(52px)
	}
}

.main-header .main-header-container {
	padding: 0 12px;
	box-sizing: border-box;
	width: 100%;
	max-width: 1700px;
	margin: 0 auto;
	height: 100%;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center
}

@media only screen and (min-width:601px) and (max-width:767px) {
	.main-header .main-header-container {
	    height: 60px;
		padding: 0 20px
	}
}

.brand-logo-wrapper {
	height: 100%;
	display: flex;
	align-items: center;
	cursor: pointer;
	z-index: 5;
	position: relative
}

.brand-logo-img {
	display: flex;
	align-items: center
}

.brand-logo-img .rf-main-logo path {
	transition: fill .2s linear
}

.menu-right-wrapper {
	width: 100%;
	height: 100%
}

@media screen and (max-width:1300px) {
	.menu-right-wrapper {
		width: 100%
	}
}

@media only screen and (min-width:1151px) {
	.menu-right-wrapper {
		transform: none!important
	}
}

.main-menu-wrapper {
	display: flex;
	justify-content: flex-end;
	align-items: center;
	height: 100%;
	box-sizing: border-box
}

@media only screen and (min-width:1149px) {
	.main-menu-wrapper {
		transform: none!important
	}
}

@media only screen and (max-width:1150px) {
	.menu-right-wrapper {
		background: rgba(37, 46, 72, .4)
	}
	.main-menu-wrapper {
		box-shadow: inset 0 6px 12px 0 rgba(0, 82, 224, .101);
		flex-direction: column;
		align-items: flex-start;
		justify-content: flex-start;
		overflow: auto;
		background: #fff;
		transform: translate(300px);
		transition: all .2s ease-in-out
	}
}

@media only screen and (min-width:1640px) {
	.main-menu-wrapper {
		margin: 0 0 0 90px
	}
	.main-menu-wrapper.rf-ar {
		margin: 0 90px 0 0
	}
}

.main-menu-wrapper .main-nav-wrapper {
	display: flex;
	width: 80%;
	height: 100%
}

@media only screen and (max-width:1640px) {
	.main-menu-wrapper .main-nav-wrapper {
		justify-content: center
	}
}

.main-menu-wrapper .main-nav {
	display: flex;
	justify-content: flex-end;
	height: 100%;
	list-style-type: none!important
}

.nav-item-link,
.submenu-item-link {
	align-items: center;
	font-weight: 500
}

html[lang=de] .main-nav-wrapper .main-nav,
html[lang=ru] .main-nav-wrapper .main-nav {
	padding-top: 0
}

@media only screen and (min-width:1151px) {
	.main-nav-item {
		margin: 0 0 0 30px;
		height: 100%
	}
	.main-nav-item.rf-ar {
		margin: 0 30px 0 0
	}
}

.main-nav-item.promo-mobile {
	display: none
}

.triangle-wrap {
	opacity: 0;
	width: 100%;
	position: relative
}

.triangle-wrap.open-triangle {
	opacity: 1!important
}

.triangle-wrap .triangle {
	pointer-events: none;
	position: absolute;
	left: 50%;
	bottom: 0;
	transform: translateX(-50%);
	width: 0;
	border-bottom: solid 10px #387dff!important;
	border-right: solid 10px transparent;
	border-left: solid 10px transparent
}

.nav-new-product-link {
	position: relative;
	font: inherit
}

.nav-item-link,
.tag-menu__item__link {
	font-size: 14px;
	transition: .2s linear
}

@keyframes pulse-dot {
	0% {
		box-shadow: 0 0 0 0 rgba(59, 251, 101, .5)
	}
	100% {
		box-shadow: 0 0 0 5px rgba(59, 251, 101, .5)
	}
}

.nav-new-product-link::after {
	content: "";
	position: absolute;
	top: -40%;
	display: block;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: #3bfb65
}

html[dir=ltr] .nav-new-product-link::after {
	right: 0;
	transform: translate(80%, 0)
}

html[dir=rtl] .nav-new-product-link::after {
	left: 0;
	transform: translate(-80%, 0)
}

.animation-available .nav-new-product-link::after {
	animation: pulse-dot 2s infinite
}

@media only screen and (max-width:1150px) {
	.main-nav-item.promo-mobile {
		display: block
	}
	.main-nav-item .nav-new-product-link::after {
		animation: none
	}
}

.nav-item-link {
	display: flex;
	height: 100%;
	color: var(--text-color);
	white-space: nowrap;
	cursor: pointer
}

@media only screen and (min-width:1151px) {
	.nav-item-link .rf-caret {
		display: none
	}
}

.xs {
	display: none
}

@media screen and (max-width:1150px) {
	.xs {
		display: flex
	}
	.xl {
		display: none
	}
}

.submenu-inner_menu,
.tag-menu {
	display: none;
	bottom: 0;
	list-style-type: none;
	position: absolute
}

.submenu-inner_menu {
	left: 50%;
	padding: 0;
	min-width: 100%;
	transform: translate(-50%, 100%)
}

@media only screen and (min-width:1300px) {
	.nav-item-link.active,
	.nav-item-link.active:hover {
		color: #387dff
	}
	.nav-item-link:focus,
	.nav-item-link:hover {
		color: var(--text-hover-color)
	}
	.submenu-inner_menu,
	.tag-menu {
		max-height: calc((100vh) - 130px);
		overflow-y: auto;
		-webkit-overflow-scrolling: touch;
		-ms-scroll-chaining: contain contain;
		overscroll-behavior: contain contain
	}
}

.submenu-inner_menu__item .submenu-item-link {
	justify-content: flex-start;
	line-height: 2.88;
	white-space: nowrap;
	color: #b9cfff
}

.submenu-inner_menu__item .submenu-item-link.active {
	background-color: #5690ff;
	color: #fff
}

.tag-menu_indicator {
	cursor: pointer
}

@media only screen and (max-width:1299px) {
	.tag-menu_indicator {
		display: none
	}
}

.tag-menu {
	right: -52%;
	flex-wrap: wrap;
	padding: 10px;
	width: 79.12vw;
	background-color: #387dff;
	max-width: 1156px;
	transform: translateY(100%);
	box-sizing: border-box
}

.choose-lang,
.explore-menu,
.nav-item-submenu-wrap,
.sign-lang-wrapper,
.user-menu-dropdown {
	list-style-type: none!important
}

.tag-menu.rf-ar {
	right: auto;
	left: -108%
}

.tag-menu__item {
	margin: 6px 10px;
	border-radius: 10px;
	overflow: hidden
}

.tag-menu__item__link {
	display: block;
	padding: 6px 10px;
	font-weight: 500;
	color: #fff;
	background: rgba(0, 82, 224, .5)
}

.tag-menu__item__link:hover {
	background: #5690ff
}

.tag-menu__item__link:focus {
	color: #fff
}

.tag-menu__item__link.active {
	background: #fff;
	color: #387dff
}

.tag-menu__item__link:not(.active):hover {
	color: #fff
}

.nav-item-submenu-wrap {
	z-index: 100;
	background-color: #387dff;
	position: absolute;
	left: 0;
	top: 70px;
	width: 100%;
	opacity: 0;
	height: 50px;
	display: none;
	flex-direction: row;
	align-items: center;
	box-sizing: border-box
}

@media only screen and (min-width:1300px) {
	.nav-item-submenu-wrap {
		transition: all .35s;
		padding: 0 20px
	}
	.nav-item-submenu-wrap.createVideo.rf-jp .submenu-item-link {
		font-size: 12px
	}
}






.choose-lang .lang-item-az,
.current-lang {
    
	transition: all .2s linear;
	font-size: 14px
}

.choose-lang .lang-item-tr,
.current-lang {
    
	transition: all .2s linear;
	font-size: 14px
	
}
.choose-lang .lang-item-en,
.current-lang {
    
	transition: all .2s linear;
	font-size: 14px
}
.choose-lang .lang-item-ru,
.current-lang {
    
	transition: all .2s linear;
	font-size: 14px
}






.nav-item-submenu-wrap.open-submenu {
	display: flex;
	justify-content: center;
	opacity: 1
}

@media screen and (max-width:1150px) {
	.nav-item-submenu-wrap.open-submenu {
		flex-direction: column
	}
}

.nav-item-submenu-item {
	height: 100%
}

.nav-item-submenu-item.tag-menu_indicator .submenu-item-link {
	background-color: #2770f6
}

.nav-item-submenu-item.tag-menu_indicator .submenu-item-link:hover {
	background-color: #5690ff
}

.nav-item-submenu-item.has-menu {
	position: relative
}

@media only screen and (min-width:1300px) {
	.nav-item-submenu-item.has-menu:hover .rf-caret {
		transform: rotate(180deg) translateY(-3px)
	}
	.nav-item-submenu-item.has-menu:hover .submenu-inner_menu {
		display: block
	}
	.nav-item-submenu-item.has-menu:hover .tag-menu {
		display: flex
	}
}

.submenu-item-link {
	font-size: 14px;
	padding: 0 2vw;
	color: #fff;
	display: flex;
	justify-content: center;
	height: 100%;
	background-color: #387dff;
	transition: all .2s linear
}

@media only screen and (max-width:1299px) {
	.submenu-item-link .rf-caret {
		display: none
	}
}

@media only screen and (min-width:1300px) {
	.submenu-item-link:focus {
		color: #fff
	}
	.submenu-item-link:hover {
		background-color: #2870f6;
		color: #fff
	}
}

.submenu-item-link.active {
	background-color: #5690ff
}

.sign-lang-wrapper {
	height: 100%;
	display: flex;
	align-items: center
}

@media only screen and (min-width:1151px) {
	.sign-lang-wrapper__item {

	}
	.sign-lang-wrapper__item.rf-ar {
		margin: 0 18px 0 0
	}
}

.sign-in-btn-li {
	display: flex
}

.sign-in-btn-li .sign-in-btn span {
	font: inherit
}

.change-lang-wrapper.ar .choose-lang.open {
	right: -200px
}

.change-lang-wrapper {
	display: flex;
	height: 100%;
	line-height: 60px;
	position: relative
}

@media only screen and (min-width:1021px) {
	.change-lang-wrapper.ar .choose-lang.open {
		right: auto;
		left: 0
	}
}

.current-lang {
	color: var(--text-color);
	font-weight: 500;
	cursor: pointer;
	text-transform: uppercase;
	border: none;
	background-color: transparent
}

.choose-lang {
	z-index: 100;
	display: none;
	position: absolute;
	right: -20px;
	top: 60px;
	box-shadow: 0 6px 12px 0 rgb(0 102 255 / 47%);
	border-radius: 3px
}

.choose-lang.rf-ar {
	right: auto;
	left: -20px
}

@media only screen and (max-width:1640px) {
	.choose-lang {
		right: 0
	}
	.choose-lang.rf-ar {
		right: auto;
		left: 0
	}
}

.choose-lang.open {
	display: block
}

.choose-lang.rf-ar .country-flag {
	margin: 0 0 0 10px
}









.choose-lang .lang-item-az {
	display: flex;
	align-items: center;
	color: #545f7e;
	font-weight: 500;
	line-height: 100%;
	height: 40px
}

.choose-lang .lang-item-tr {
	display: flex;
	align-items: center;
	color: #545f7e;
	font-weight: 500;
	line-height: 100%;
	height: 40px
}
.choose-lang .lang-item-en {
	display: flex;
	align-items: center;
	color: #545f7e;
	font-weight: 500;
	line-height: 100%;
	height: 40px
}
.choose-lang .lang-item-ru {
	display: flex;
	align-items: center;
	color: #545f7e;
	font-weight: 500;
	line-height: 100%;
	height: 40px
}











@media only screen and (min-width:1150px) {
	.choose-lang {
		padding-bottom: 4px;
		background-color: #fff;
		max-height: calc((100vh) - 80px);
		overflow-y: auto;
		-webkit-overflow-scrolling: touch;
		-ms-scroll-chaining: contain contain;
		overscroll-behavior: contain contain
		
		
		
		
		
		
    	}
    	.choose-lang .lang-item-az {
		padding: 0 30px
	}
		.choose-lang .lang-item-tr {
		padding: 0 30px
	}
	
		.choose-lang .lang-item-en {
		padding: 0 30px
	}
	
		.choose-lang .lang-item-ru {
		padding: 0 30px
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	.choose-lang .lang-item-az:hover {
		color: #252e48;
		background-color: #eef5ff
	}
}

.user-menu-wrapper {
	position: relative;
	align-items: center
}

.user-menu-wrapper.rf-ar .name-text {
	direction: ltr
}

@media only screen and (min-width:1300px) {
	.user-menu-wrapper {
		height: 100%
	}
	.user-menu-wrapper.rf-ar .user-menu-dropdown {
		right: auto;
		left: 50%;
		transform: translateX(-67%)
	}
	.user-menu-wrapper.rf-ar .user-menu-dropdown .user-menu-dropdown-item:first-child::before {
		display: none
	}
}

.user-menu-wrapper .user-name-overlay {
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1;
	cursor: pointer
}

@media screen and (max-width:1150px) {
	.choose-lang.open {
		max-height: 700px!important
	}
	.choose-lang .lang-item-az:first-child {
		margin: 20px 0 0;

	}
	.choose-lang .lang-item-tr:last-child {
		margin: 0 0 20px
	}
	
	.choose-lang .lang-item-en:last-child {
		margin: 0 0 20px
	}
	
	.choose-lang .lang-item-ru:last-child {
		margin: 0 0 20px

		
		
		
	}
	.user-menu-wrapper .user-name-overlay {
		height: 70px
	}
}

.user-menu-wrapper .user-account-name {
	border: none;
	outline: 0;
	background: 0 0
}

.user-menu-wrapper .user-account-name .account-btn-wrap {
	height: 30px;
	line-height: 19px;
	display: flex;
	align-items: center;
	font-weight: 500;
	border-radius: 20px;
	background: rgba(27, 85, 216, .051);
	cursor: pointer;
	text-overflow: ellipsis;
	white-space: nowrap;
	color: var(--user-color);
	transition: .2s linear;
	border: .5px solid rgba(210, 224, 252, .5)
}

html[dir=ltr] .user-menu-wrapper .user-account-name .account-btn-wrap {
	padding: 0 10px 0 0
}

html[dir=rtl] .user-menu-wrapper .user-account-name .account-btn-wrap {
	padding: 0 0 0 10px
}

.user-menu-wrapper .user-account-name .signed-user-icon path {
	fill: currentColor;
	transition: fill .2s linear
}

.user-account-name .name-text {
	font-size: 14px;
	font-weight: 500;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	max-width: 130px
}

html[dir=ltr] .user-account-name .name-text {
	margin-left: 7px
}

html[dir=rtl] .user-account-name .name-text {
	margin-right: 7px
}

@media only screen and (min-width:1300px) and (max-width:1439px) {
	html[lang=de] .user-account-name .name-text {
		display: none
	}
}

@media only screen and (min-width:1300px) and (max-width:1470px) {
	html[lang=fr] .user-account-name .name-text {
		display: none
	}
}

@media only screen and (min-width:1300px) and (max-width:1400px) {
	html[lang=ru] .user-account-name .name-text {
		display: none
	}
}

@media only screen and (max-width:1300px) {
	.user-account-name .name-text {
		display: none
	}
}

@media only screen and (max-width:1150px) {
	.user-account-name .name-text {
		display: block
	}
}

.user-account-name .user-icon {
	position: relative;
	width: 38px;
	height: 38px;
	display: flex;
	align-items: center;
	justify-content: center;
	background: var(--user-bg);
	border-radius: 50%;
	overflow: hidden
}

.user-account-name .user-icon::before {
	content: attr(data-before);
	position: absolute;
	font-size: 11px;
	width: 28px;
	height: 22px;
	padding: 2px 0;
	background: rgba(255, 255, 255, .75);
	border-radius: 50%;
	bottom: -7px;
	font-weight: 700;
	color: #262e46
}

@media screen and (min-width:1300px) {
	.user-account-name .user-icon::before {
		display: none
	}
}

@media screen and (max-width:1300px) {
	.user-account-name .user-icon::before {
		display: block
	}
	.user-menu-dropdown.open {
		max-height: 700px!important
	}
}

@media screen and (max-width:1150px) {
	.user-account-name .user-icon::before {
		display: none
	}
}

@media only screen and (max-width:1299px) {
	.user-account-name .user-icon .signed-user-icon {
		transform: translateX(-3px)
	}
	.user-account-name .user-icon .signed-user-icon.rf-ar {
		transform: translateX(5px)
	}
}

.user-account-name .caret {
	width: 20px;
	height: 20px;
	text-align: center;
	line-height: 14px;
	display: flex;
	justify-content: center;
	align-items: center
}

.user-menu-dropdown {
	z-index: 100;
	display: none;
	position: absolute;
	top: 52px;
	right: 0;
	box-shadow: 0 6px 12px rgba(56, 125, 255, .149);
	border-radius: 5px
}

.user-menu-dropdown.open {
	display: block
}





























































@media only screen and (min-width:1300px) {
	.user-menu-dropdown {
		max-height: calc((100vh) - 80px);
		-webkit-overflow-scrolling: touch;
		-ms-scroll-chaining: contain contain;
		overscroll-behavior: contain contain
	}
}

@media only screen and (max-width:1150px) {
	.user-menu-dropdown {
		position: absolute;
		top: 50px;
		left: 0;
		box-shadow: none
	}
	.main-header,
	.main-header.with-submenu {
		margin-bottom: 0
	}
}

.user-menu-dropdown-item {
	height: 40px;
	background-color: #fff;
	transition: all .2s linear
}

.user-menu-dropdown-item.colors {
	background: transparent linear-gradient(180deg,rgb(255, 255, 255) 0,rgb(255, 255, 255) 55%,rgb(255, 255, 255) 84%,rgba(56, 126, 255, 0.349) 100%)
}

.user-menu-dropdown-item.colors .user-menu-dropdown-link {
	color: #fff
}

.user-menu-dropdown-item:first-child:hover:before {
	background: #eef5ff
}

.user-menu-dropdown-item:first-child::before {
	content: "";
	position: absolute;
	top: -5px;
	right: 14px;
	z-index: -1;
	width: 13px;
	height: 13px;
	background: #fff;
	border-radius: 2px;
	transform: rotate(-45deg);
	box-shadow: 0 0 12px rgba(56, 125, 255, .149);
	transition: all .2s linear
}

@media screen and (max-width:1150px) {
	.user-menu-dropdown-item:first-child::before {
		display: none
	}
}

@media only screen and (min-width:1150px) {
	.user-menu-dropdown-item:hover {
		background-color: #eef5ff
	}
	.user-menu-dropdown-item:hover .user-menu-dropdown-link {
		color: #363f5a
	}
	.user-menu-dropdown-item.colors:hover {
		background: transparent linear-gradient(90deg, #766de8 0, #766de8 100%) 0 0 no-repeat padding-box
	}
	.user-menu-dropdown-item.colors:hover .user-menu-dropdown-link {
		color: #fff
	}
}

.user-menu-dropdown-item .user-menu-dropdown-link {
	padding: 0 30px;
	height: 100%;
	width: 100%;
	display: flex;
	align-items: center;
	color: #545f7e;
	font-size: 14px;
	font-weight: 500;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	transition: all .2s linear;
	box-sizing: border-box
}



























.hamburger-wrapper {
	display: none;
	margin-right: -10px;
}

.hamburger-wrapper svg {
	fill: currentColor;
	display: block;
	height: 1em!important;
	width: 1em!important;
}

.hamburger-btn {
	color: #0066ff;
	display: block;
	font-size: 3em;
	overflow: hidden;
	position: relative;
	height: 1em;
	width: 1em;
}

.hamburger-btn svg {
	position: absolute;
	transition: color 250ms,transform .3s;
	top: 0;
}

.hamburger-btn.open #ht {
	transform: translate(-10%,10%) rotate(45deg);
}

.hamburger-btn.open #hm {
	transform: translateX(-100%);
}

.hamburger-btn.open #hb {
	transform: translate(-10%,-9%) rotate(-45deg);
}

@media only screen and (max-width:1150px) {
	.main-header,.main-header.with-submenu {
		margin-bottom: 0;
	}

	.menu-right-wrapper {
		backdrop-filter: blur(2px);
		-webkit-backdrop-filter: blur(2px);
		transform: translateX(100%);
		height: calc((100vh) - 69px);
		width: 100%;
		position: fixed;
		z-index: 99;
		left: 0;
		top: 60px;
		display: block;
		box-sizing: border-box;
	}

	.menu-right-wrapper.pd-t-0 {
		padding: 0 0 30px;
	}

	.main-menu-wrapper {
		position: absolute;
		max-width: 270px;
		min-width: 265px;
		right: 0;
		overscroll-behavior: contain;
	}

	.main-menu-wrapper .main-nav-wrapper {
		width: 100%;
		height: auto;
		flex-direction: column;
	}

	.main-nav-wrapper .main-nav {
		display: flex;
		flex-direction: column;
		list-style-type: none!important;
	}

	.main-nav-item .rf-active-border,.main-nav-item .triangle {
		display: none;
	}

	.main-menu-wrapper .main-nav {
		width: 100%;
		flex-direction: column;
		height: auto;
	}

	.main-menu-wrapper .main-nav .main-nav-item {
		border-bottom: 1px solid #eef5ff;
		transition: 1s;
	}

	.main-nav-item--sub-menu {
		margin-bottom: 40px;
	}

	.main-nav-item .nav-item-link {
		height: 56px;
		padding: 0 30px;
		font-size: 16px;
		cursor: pointer;
		position: relative;
		color: #0766fc;
	}

	.nav-item-submenu-wrap {
		width: 100%;
		overflow: hidden;
		position: static;
		left: unset;
		opacity: 1;
		display: block;
		background: #f5fafe;
		height: initial;
		max-height: 0;
		transition: max-height .5s;
	}

	.nav-item-submenu-wrap.open {
		max-height: 700px;
	}

	.nav-item-submenu-wrap .nav-item-submenu-item {
		height: 40px;
		width: 100%;
		padding: 4px 0;
	}

	.nav-item-submenu-wrap .nav-item-submenu-item:first-child {
		padding: 20px 0 0;
	}

	.nav-item-submenu-wrap .nav-item-submenu-item:last-child {
		padding: 0 0 20px;
	}

	.nav-item-submenu-item .submenu-item-link {
		font-size: 16px;
		padding: 0 30px 0 50px;
		background: #f5fafe;
		font-weight: 500;
		color: #252e48;
		justify-content: flex-start;
	}

	.nav-item-submenu-item .submenu-item-link.rf-ar {
		padding: 0 50px 0 30px;
	}

	.nav-item-submenu-item .submenu-item-link.active {
		background-color: #eef5ff;
		color: #387dff;
	}

	.sign-lang-wrapper {
		width: 100%;
		height: auto;
		flex-direction: column;
		align-items: flex-start;
		margin: 0 0 100px!important;
	}

	.sign-lang-wrapper .user-menu-wrapper {
		width: 100%;
		z-index: 10;
		border-bottom: 1px solid #eef5ff;
		flex-direction: column;
		align-items: flex-start;
	}

	.user-menu-wrapper .user-account-name {
		width: 100%;
		height: 56px;
		padding: 0 30px;
		box-sizing: border-box;
	}
}



















@media only screen and (max-width:1150px) and (max-width:1150px) {
	.user-menu-wrapper .user-account-name {
		width: auto;
		height: auto;
		padding: 0 3px 0 0;
	}

	html[dir=ltr] .user-menu-wrapper .user-account-name {
		margin: 20px 0 20px 20px;
	}

	html[dir=rtl] .user-menu-wrapper .user-account-name {
		margin: 20px 20px 20px 0;
	}
}

@media only screen and (max-width:1150px) {
	.change-lang-wrapper .choose-lang,.user-menu-wrapper .user-menu-dropdown {
		position: static;
		box-shadow: none;
		width: 100%;
		background: #f5fafe;
		max-height: 0;
		overflow: hidden;
	}

	.user-menu-wrapper .user-menu-dropdown {
		transform: none;
		display: block;
	}

	.user-menu-dropdown .user-menu-dropdown-item {
		box-sizing: border-box;
		width: 100%;
		background-color: #f5fafe;
		margin: 10px 0;
	}

	.user-menu-dropdown .user-menu-dropdown-item:first-child {
		margin: 20px 0 0;
	}

	.user-menu-dropdown .user-menu-dropdown-item:last-child {
		margin: 0 0 20px;
	}

	.user-menu-dropdown-item .user-menu-dropdown-link {
		color: #252e48;
		font-size: 16px;
		box-sizing: border-box;
		justify-content: flex-start;
		width: 100%;
		padding: 0 30px 0 50px;
	}

	.user-menu-dropdown-item .user-menu-dropdown-link.rf-ar {
		padding: 0 50px 0 30px;
	}

	.sign-lang-wrapper .sign-in {
		width: 100%;
		margin: 20px 0;
	}

	.sign-in-btn-li {
		width: 100%;
		border-bottom: 1px solid #eef5ff;
		box-sizing: border-box;
	}

	html[dir=ltr] .sign-in-btn-li {
		padding: 20px 0 20px 30px;
	}

	html[dir=rtl] .sign-in-btn-li {
		padding: 20px 30px 20px 0;
	}

	.change-lang-wrapper {
		flex-direction: column;
		height: auto;
		min-height: 56px;
		width: 100%;
		box-sizing: border-box;
	}

	.change-lang-wrapper>.current-lang {
		padding: 0 0px;
	}

	.change-lang-wrapper .current-lang {
		font-size: 16px;
		line-height: 56px;
		color: #363f5a;
	}

	.change-lang-wrapper .current-lang .rf-caret {
		margin-bottom: 3px;
	}

	.change-lang-wrapper .choose-lang {
		height: auto;
		transition: height .3s;
		padding: 0 30px 0 29px;
		
	}

	.change-lang-wrapper .lang-item {
		padding: 0 30px 0 50px;
	}

	.change-lang-wrapper .lang-item.rf-ar {
		padding: 0 50px 0 30px;
	}

	.main-header-container .hamburger-wrapper {
		display: block;
	}
}

.explore-icon-name {
	height: 100%;
	padding: 0!important;
}

.main-nav-text-create {
	position: relative;
	font-size: 14px;
	font-weight: 500;
	line-height: 70px;
	color: var(--text-color);
	white-space: nowrap;
}

@media screen and (max-width:1150px) {
	.explore-icon-name {
		padding: 0 30px!important;
		height: auto;
	}

	.main-nav-text-create {
		height: 56px;
		padding: 0 30px;
		font-size: 16px;
		cursor: pointer;
		position: relative;
	}

	.explore-menu.open {
		max-height: 700px;
	}
}

.main-nav-text-create::after {
	content: "";
	position: absolute;
	right: -12px;
	top: 50%;
	transform: translateY(-50%);
	display: block;
	height: 30px;
	width: 1px;
	background: #cfe0ff;
}

@media screen and (max-width:1149px) {
	.main-nav-text-create::after {
		display: none;
	}
}

.explore-wrap {
	position: relative;
}

.explore-wrap .overlay {
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	cursor: pointer;
}

.explore-icon-name {
	display: flex;
	align-items: center;
}

@media only screen and (max-width:1299px) {
	.main-nav-item .nav-item-submenu-wrap.active {
		background-color: #588aff;
	}

	.main-nav-item .nav-item-link.active {
		color: #387dff;
	}

	.explore-wrap .overlay {
		height: 56px;
		z-index: 1;
	}

	.explore-icon-name {
		padding: 0 30px;
	}

	.explore-icon-name .nav-item-link {
		padding: 0;
	}
}























.explore-menu {
	z-index: 101;
	display: none;
	background-color: #fff;
	position: absolute;
	top: 70px;
	right: 50%;
	transform: translateX(45%);
	box-shadow: 0 6px 12px 0 rgba(0, 82, 224, .1);
	border-radius: 3px
}

.explore-menu.open {
	display: block
}

@media only screen and (min-width:1300px) {
	.explore-icon-name {
		height: 100%
	}
	.explore-icon-name:hover .nav-item-link {
		color: var(--text-hover-color)
	}
	.explore-icon-name:hover .rf-caret:after {
		border-color: var(--text-hover-color)
	}
	.explore-menu {
		max-height: calc((100vh) - 80px);
		overflow-y: auto;
		-webkit-overflow-scrolling: touch;
		-ms-scroll-chaining: contain contain;
		overscroll-behavior: contain contain
	}
}

@media only screen and (max-width:1150px) {
	.explore-menu {
		width: 100%;
		display: block;
		position: static;
		top: auto;
		right: auto;
		transform: none;
		box-shadow: none;
		background: #f5fafe;
		max-height: 0;
		height: inherit;
		overflow: hidden
	}
	.explore-menu__item {
		padding: 4px 0
	}
}

.explore-menu__item {
	height: 40px
}

.explore-menu__item__link {
	height: 100%;
	width: 100%;
	padding: 0 30px;
	display: flex;
	align-items: center;
	font-size: 14px;
	color: #545f7e;
	font-weight: 500;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	transition: all .2s linear;
	background-color: #fff;
	box-sizing: border-box
}

@media only screen and (max-width:1150px) {
	.explore-menu__item__link {
		box-sizing: border-box;
		justify-content: flex-start;
		width: 100%;
		padding: 0 30px 0 50px;
		background: #f5fafe;
		color: #252e48;
		font-size: 16px
	}
	.explore-menu__item__link.rf-ar {
		padding: 0 50px 0 30px
	}
	.explore-menu__item__link:hover {
		color: #7683a8
	}
}

@media only screen and (min-width:1300px) {
	.explore-menu__item__link:hover {
		background-color: #eef5ff;
		color: #363f5a
	}
}

.main-header a:focus,
.main-header button:focus {
	outline: -webkit-focus-ring-color auto 5px;
	outline-offset: -2px
}

.main-header .focus-invisible:active,
.main-header .focus-invisible:focus {
	outline: 0;
	border: none
}

.explore-icon-name {
	border: none;
	background-color: transparent
}

.header-no-shadow {
	box-shadow: none!important
}

.rf-btn.orange,
.rf-btn.orange:hover {
	box-shadow: 0 3px 16px 0 rgba(243, 124, 108, .5);
	color: #fff
}

.main-navbar {
	width: 100%;
	height: 100%
}

@media screen and (min-width:1150px) {
	.main-navbar {
		display: flex;
		align-items: center
	}
}

@media screen and (max-width:1150px) {
	.explore-menu__item:first-child {
		margin: 20px 0 0
	}
	.explore-menu__item:last-child {
		margin: 0 0 20px
	}
	.main-navbar {
		overflow: scroll;
		flex-direction: column
	}
	html[lang=de] .submenu-item-link,
	html[lang=es] .submenu-item-link,
	html[lang=fr] .submenu-item-link {
		padding: 0 30px
	}
}

html[lang=de] .name-text,
html[lang=es] .name-text,
html[lang=fr] .name-text {
	max-width: 100px
}

@media screen and (min-width:1151px) and (max-width:1350px) {
	html[lang=de] .main-nav-wrapper,
	html[lang=de] .name-text,
	html[lang=es] .main-nav-wrapper,
	html[lang=es] .name-text,
	html[lang=fr] .main-nav-wrapper,
	html[lang=fr] .name-text {
		display: none
	}
	html[lang=de] .menu-right-wrapper,
	html[lang=es] .menu-right-wrapper,
	html[lang=fr] .menu-right-wrapper {
		width: auto
	}
}

@media screen and (max-width:1350px) {
	html[lang=de] .main-header.with-submenu,
	html[lang=es] .main-header.with-submenu,
	html[lang=fr] .main-header.with-submenu {
		margin-bottom: 0
	}
	html[lang=de] .tablet-nav,
	html[lang=es] .tablet-nav,
	html[lang=fr] .tablet-nav {
		display: block
	}
}

@media screen and (max-width:767px) {
	html[lang=de] .tablet-nav,
	html[lang=es] .tablet-nav,
	html[lang=fr] .tablet-nav {
		display: none
	}
}

html[lang=de] .main-menu-wrapper,
html[lang=es] .main-menu-wrapper,
html[lang=fr] .main-menu-wrapper {
	margin: 0
}

@media only screen and (min-width:1670px) {
	html[lang=de] .main-menu-wrapper,
	html[lang=es] .main-menu-wrapper,
	html[lang=fr] .main-menu-wrapper {
		margin: 0 0 0 50px
	}
}

@media screen and (max-width:1150px) {
	html[lang=de] .user-menu-dropdown-link,
	html[lang=es] .user-menu-dropdown-link,
	html[lang=fr] .user-menu-dropdown-link {
		padding: 0 30px
	}
	html[lang=de] .explore-menu__item__link,
	html[lang=es] .explore-menu__item__link,
	html[lang=fr] .explore-menu__item__link {
		white-space: normal;
		font-size: 14px;
		padding: 0 30px
	}
	html[lang=ja] .submenu-item-link,
	html[lang=ja] .user-menu-dropdown-link,
	html[lang=pt] .submenu-item-link,
	html[lang=pt] .user-menu-dropdown-link,
	html[lang=ru] .submenu-item-link,
	html[lang=ru] .user-menu-dropdown-link,
	html[lang=tr] .submenu-item-link,
	html[lang=tr] .user-menu-dropdown-link {
		padding: 0 30px
	}
	html[lang=ja] .explore-menu__item__link,
	html[lang=pt] .explore-menu__item__link,
	html[lang=ru] .explore-menu__item__link,
	html[lang=tr] .explore-menu__item__link {
		white-space: normal;
		font-size: 14px;
		padding: 0 30px
	}
}

@media only screen and (min-width:1300px) and (max-width:1470px) {
	html[lang=fr] .user-icon:before {
		display: block
	}
}

@media only screen and (min-width:1300px) and (max-width:1439px) {
	html[lang=de] .user-icon:before {
		display: block
	}
}

@media only screen and (min-width:1300px) and (max-width:1350px) {
	html[lang=es] .user-icon:before {
		display: block
	}
}

@media only screen and (min-width:1300px) and (max-width:1400px) {
	html[lang=ru] .user-icon:before {
		display: block
	}
}

.rf-btn.hidden {
	display: none
}

.rf-btn.orange {
	background: linear-gradient(to bottom, #ffa330, #ff9346, #ff8559, #fb7a6a, #f07379)
}

.rf-btn.orange:hover {
	background-image: linear-gradient(to bottom, #ffb04e, #ffa159, #ff9367, #ff8775, #ff7e84)
}

.rf-btn.orange:active {
	opacity: 1;
	background-image: linear-gradient(to bottom, #ff991a, #ff8a36, #ff7d4c, #ff725f, #fe6a71)
}

html[lang=ar] .independence-wrap.independence .ch-ill,
html[lang=ar] .independence-wrap.independence .ch-ill-xs {
	transform: rotateY(180deg)
}

@keyframes snow {
	to {
		background-position: 0 163px
	}
}

@keyframes snow-mobile {
	to {
		background-position: 0 460px
	}
}

@media screen and (max-width:1150px) {
	.text-info-sale {
		color: #EB283E
	}
	.text-info-block {
		color: #2A5590;
		font-size: 13px;
		text-align: center
	}
	html[lang=pt] .text-info-block,
	html[lang=es] .text-info-block,
	html[lang=de] .text-info-block,
	html[lang=tr] .text-info-block {
		display: block
	}
}

.independence-wrap {
	position: relative;
	height: 52px;
	display: flex;
	justify-content: space-around;
	align-items: center;
	background-size: contain;
	box-sizing: border-box
}

@media screen and (max-width:1150px) {
	.independence-wrap {
		height: 210px!important
	}
}

.independence-wrap.independence .ch-ill,
.independence-wrap.independence .ch-ill-xs {
	height: 100%
}

.independence-wrap .santa-text {
	font-size: 14px
}

.independence-wrap .left-icon {
	position: absolute;
	left: 0;
	bottom: 0
}

.independence-wrap .right-icon {
	position: absolute;
	right: 0;
	bottom: 0
}

.independence-wrap.independence {
	position: relative;
	overflow: hidden
}

.independence-wrap.independence .ch-ill.left {
	margin-right: 120px
}

.independence-wrap.independence .ch-ill.right {
	margin-left: 120px
}

.independence-wrap.independence .ch-mobile-wrap {
	display: none
}

@media screen and (max-width:1150px) {
	.independence-wrap .santa-text {
		color: #2A5590!important
	}
	html[lang=es] .independence-wrap .santa-text {
		font-size: 13px!important
	}
	html[lang=fr] .independence-wrap .santa-text {
		font-size: 14px!important
	}
	.independence-wrap .left-icon,
	.independence-wrap .right-icon,
	.independence-wrap.independence .ch-ill,
	.independence-wrap.independence .ch-ill-xs {
		display: none
	}
	.independence-wrap.independence .ch-mobile-wrap {
		display: block;
		position: absolute;
		bottom: -5px
	}
}

@media only screen and (min-width:1151px) {
	.independence-wrap.independence.lg {
		display: flex
	}
	.independence-wrap.independence.xs {
		display: none!important
	}
}

@media only screen and (max-width:1150px) {
	.independence-wrap.independence.lg {
		display: none!important
	}
	.independence-wrap.independence.xs {
		display: flex!important;
		position: relative;
		height: auto;
		flex-direction: column;
		padding: 38px 20px 45px;
		overflow: hidden;
		background: url(https://static.rfstat.com/forest/images/v2/banner/july-mobile-bg.svg) center center/cover no-repeat
	}
	html[lang=pt] .independence-wrap.independence.xs,
	html[lang=tr] .independence-wrap.independence.xs,
	html[lang=ru] .independence-wrap.independence.xs {
		padding: 45px 20px
	}
	html[lang=pt] .independence-wrap.independence.xs {
		padding: 28px 20px 45px
	}
}

@media only screen and (max-width:1150px) and (max-width:768px) {
	.independence-wrap.independence {
		background-size: 150%
	}
}

.independence-wrap.independence .independence_container {
	display: flex;
	align-items: center;
	justify-content: space-between;
	height: 100%;
	width: 100%
}

@media only screen and (max-width:1150px) {
	.independence-wrap.independence .independence_container {
		flex-direction: column;
		justify-content: center;
		text-align: center;
		padding: 0 3px
	}
}

.independence-wrap.independence .independence_text {
	font-size: 14px;
	letter-spacing: .2px;
	color: #fff;
	font-weight: 400;
	white-space: nowrap;
	text-align: right
}

@media only screen and (max-width:1150px) {
	.independence-wrap.independence .independence_text {
		display: inline-block;
		white-space: normal;
		text-align: center;
		font-size: 14px;
		align-items: center;
		letter-spacing: 0;
		max-width: 220px
	}
	.independence-wrap.independence .independence_text-wrap {
		margin-top: 20px
	}
}

@media only screen and (max-width:1150px) and (max-width:1150px) {
	.independence-wrap.independence .independence_text-wrap {
		margin-top: 0
	}
}

.independence-wrap.independence .independence_text.text-value {
	margin-top: 3px
}

.independence-wrap.independence .independence_text--14 {
	font-size: 14px
}

.independence-wrap.independence .independence_text--16 {
	font-size: 16px
}

@media screen and (max-width:1370px) {
	.independence-wrap.independence .independence_text--16 {
		font-size: 14px
	}
}

.independence-wrap.independence .independence_text--20 {
	font-size: 20px;
	color: #2A5590
}

.independence-wrap.independence .independence_text--semi {
	font-weight: 500
}

.independence-wrap.independence .independence_text--semiBold {
	font-weight: 600
}

.independence-wrap.independence .independence_text--bold {
	font-weight: 700
}

.independence-wrap.independence .independence_text--red {
	color: #F61647
}

@media screen and (max-width:1150px) {
	.independence-wrap.independence .independence_text.text-value {
		text-align: left
	}
	html[lang=es] .independence-wrap.independence .independence_text--20 {
		font-size: 14px
	}
	html[lang=tr] .independence-wrap.independence .independence_text--20,
	html[lang=fr] .independence-wrap.independence .independence_text--20 {
		font-size: 15px
	}
	html[lang=pt] .independence-wrap.independence .independence_text--20 {
		font-size: 18px
	}
	.independence-wrap.independence .independence_text--red {
		color: #fff
	}
}

.independence-wrap.independence .independence_text--white {
	color: #fff
}

.independence-wrap.independence .independence_text-wrap {
	display: flex;
	flex-direction: column;
	align-items: flex-end;
	justify-content: center;
	text-align: right;
	flex-basis: 44%;
	background: url(https://static.rfstat.com/forest/images/v2/banner/us-stars.svg) center center/contain no-repeat, linear-gradient(90deg, #2A5590 0, #20467B 100%);
	height: 100%;
	z-index: 2;
	padding-right: 30px
}

html[lang=ar] .independence-wrap.independence .independence_text-wrap {
	text-align: left;
	padding-left: 30px
}

@media screen and (max-width:1150px) {
	.independence-wrap.independence .independence_text-wrap {
		align-items: center;
		text-align: center;
		background: 0 0;
		color: #2A5590!important;
		padding-right: 0;
		height: auto;
		flex-basis: initial
	}
	html[lang=ar] .independence-wrap.independence .independence_text-wrap {
		padding-left: 0;
		text-align: center
	}
	html[lang=pt] .independence-wrap.independence .independence_info,
	html[lang=es] .independence-wrap.independence .independence_info,
	html[lang=de] .independence-wrap.independence .independence_info {
		font-size: 13px
	}
	html[lang=fr] .independence-wrap.independence .independence_info {
		font-size: 12px
	}
}

.independence-wrap.independence .independence_link {
	display: flex;
	align-items: center;
	position: relative;
	margin: 10px;
	text-align: center
}

@media only screen and (min-width:1151px) {
	.independence-wrap.independence .independence_link::after,
	.independence-wrap.independence .independence_link::before {
		content: '';
		display: inline-block;
		position: absolute;
		background: url(https://static.rfstat.com/forest/images/v2/banner/july-star-sm.svg) center center/contain no-repeat;
		width: 100%;
		height: 9px;
		left: 50%;
		transform: translateX(-50%)
	}
	.independence-wrap.independence .independence_link {
		margin: 0 25px
	}
	.independence-wrap.independence .independence_link::before {
		top: -9px
	}
	.independence-wrap.independence .independence_link::after {
		bottom: -9px
	}
}

.independence-wrap.independence .independence_center-block {
	max-width: 700px;
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100%;
	will-change: background-position;
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	z-index: 3;
	background: url(https://static.rfstat.com/forest/images/v2/banner/july-4.svg) center center/cover no-repeat
}

@media screen and (max-width:1150px) {
	.independence-wrap.independence .independence_center-block {
		width: 100%;
		background: 0 0;
		display: flex;
		position: initial;
		left: initial;
		transform: none;
		justify-content: center;
		align-items: center;
		height: auto
	}
}

.independence-wrap.ch-2020.rf-ar,
.independence-wrap.ch-2020.rf-ar .ch-2020_container {
	transform: scaleX(-1)
}

@media screen and (min-width:5000px) {
	.independence-wrap.independence .independence_center-block {
		max-width: 1100px
	}
}

.independence-wrap.independence .independence_left-block {
	display: flex;
	align-items: center;
	z-index: 2;
	background: url(https://static.rfstat.com/forest/images/v2/banner/us-stars.svg) center center/contain no-repeat, linear-gradient(270deg, #EB283E 0, #C71F32 100%);
	height: 100%;
	flex-basis: 44%;
	color: #fff;
	padding-left: 30px
}

html[lang=ar] .independence-wrap.independence .independence_left-block {
	padding-right: 30px
}

.independence-wrap.independence .independence_icon {
	margin-left: 15px
}

@media screen and (max-width:1150px) {
	.independence-wrap.independence .independence_left-block {
		flex-direction: column;
		justify-content: center;
		background: 0 0;
		padding-left: 0;
		font-weight: 600;
		height: auto;
		flex-basis: initial
	}
	.independence-wrap.independence .independence_icon {
		display: none;
		margin-left: 0;
		margin-top: 5px;
		width: 200px
	}
}

.independence-wrap.independence .independence_mobile {
	margin-top: 5px
}

@media screen and (min-width:1350px) {
	.independence-wrap.independence .independence_mobile {
		display: none
	}
}

@media only screen and (max-width:1110px) and (min-width:1020px) {
	.independence-wrap.rf-es .christmas-item,
	.independence-wrap.rf-pt .christmas-item {
		font-size: 14px
	}
}

@media only screen and (min-width:1101px) {
	.independence-wrap.ch-2020 {
		background: url(https://static.rfstat.com/forest/images/v2/pricing_page/ch-20-bg2.jpg) center center/cover no-repeat, rgba(0, 0, 0, 0)
	}
	.independence-wrap.ch-2020.lg {
		display: flex!important
	}
}

@media only screen and (max-width:1100px) {
	.independence-wrap.ch-2020 {
		background: url(https://static.rfstat.com/forest/images/v2/pricing_page/ch-background-tablet.png) center center/cover no-repeat
	}
	.independence-wrap.ch-2020.xs {
		display: block!important
	}
}

@media only screen and (max-width:850px) {
	.independence-wrap.ch-2020 {
		padding: 24px 0
	}
}

@media only screen and (min-width:1100px) {
	.independence-wrap.ch-2020.rf-ar .ch-2020_text-wrap {
		text-align: left
	}
}
		</style>
<meta name="robots" content="noindex" />



<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Language" content="az"/>
<meta name="format-detection" content="telephone=no">

<title>Technical Support order sent</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">




<!-- Fonts -->


<!-- Styles -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap');
</style>
<!-- Normalize -->
<link rel="stylesheet" type="text/css" href="https://hostaring.com/vendor/normalize/normalize.css">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="https://hostaring.com/vendor/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="https://hostaring.com/vendor/fontawesome-free/css/all.min.css">

<link rel="stylesheet" type="text/css" href="https://hostaring.com/vendor/animate/animate.css">

<!-- Custom Styles -->
<link rel="stylesheet" type="text/css" href="https://hostaring.com/css/main.css">
<link rel="stylesheet" type="text/css" href="https://hostaring.com/css/nav.css">
<link rel="stylesheet" type="text/css" href="https://hostaring.com/css/footer.css">
<link rel="stylesheet" type="text/css" href="https://hostaring.com/css/animations.css">



   

    <link rel="stylesheet" type="text/css" href="css/home.css">
    <style type="text/css">
        nav.nav-transparent {
            background-image: none;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
        }

        #content {
            margin-top: 0 !important;
        }
    </style>
</head>
<body>
        <header class="main-header fixed" id="mainHeader">
		<div class="main-header-container">
			<div  class="brand-logo-wrapper">
             <a class="brand-logo-img" href="https://hostaring.com" aria-label="a">
             <img src="https://hostaring.com/img/general/hostaring_white_logo.svg"   class="lozad" id="brand-img" title="Return to home page" alt="hostaring.com white logo" data-loaded="true">
             </a>
			
			</div>
			<nav class="tablet-nav">
				<ul class="tablet-nav__menu">
					<li class="tablet-nav__menu__item tablet-nav__menu__item--with-border">
						<div class="tablet-nav__menu__item__text text-create">Homepage</div>
					</li>
					<li class="tablet-nav__menu__item"><a class="tablet-nav__menu__item__text" href="https://hostaring.com/en/services">Services</a>
					</li>
					<li class="tablet-nav__menu__item"><a class="tablet-nav__menu__item__text" href="https://hostaring.com/en/pricing">Pricing</a>
					</li>
					<li class="tablet-nav__menu__item"><a class="tablet-nav__menu__item__text" href="https://hostaring.com/en/contact">Contact</a>
					</li>
					<li class="tablet-nav__menu__item"><a class="tablet-nav__menu__item__text" href="https://hostaring.com/en/account/enter_registration.php">Login</a>
					</li>
					
				</ul>
			</nav>
			<div class="menu-right-wrapper  " id="smallMenu">
				<div class="main-menu-wrapper" id="menuNavbar">
					<div class="main-navbar">
						<nav class="main-nav-wrapper">
							<ul class="main-nav">
								<li class="main-nav-item"><a class="nav-item-link" href="https://hostaring.com">Homepage</a>
								</li>
								<li class="main-nav-item"><a class="nav-item-link" href="https://hostaring.com/domain">Domain</a>
								</li>
								<li class="main-nav-item"><a class="nav-item-link" href="https://hostaring.com/hosting">Hosting</a>
								</li>
								<li class="main-nav-item"><a class="nav-item-link" href="https://hostaring.com/website-development">Website development</a>
								</li>
								
							</ul>
						</nav>
						<ul class="main-nav">
							<li class="main-nav-item"><a class="nav-item-link" href="https://hostaring.com/en/services">Services</a>
							</li>
							<li class="main-nav-item"><a class="nav-item-link" href="https://hostaring.com/en/pricing">Pricing</a>
							</li>
                            <li class="main-nav-item"><a class="nav-item-link" href="https://hostaring.com/en/contact">Contact</a>
							</li>
							
							
							<li class="main-nav-item--sub-menu">
								<ul class="sign-lang-wrapper">
									<li class="user-menu-wrapper sign-lang-wrapper__item mobile-dropdown" id="header-user-menu" style="display:none">
										<div class="user-name-overlay" id="userName"></div>
										<button class="user-account-name" id="userAccountBtn" aria-expanded="false" aria-haspopup="true" aria-controls="userMenuDropdown">
											<div class="account-btn-wrap">
												<div class="user-icon" id="userInitials" data-before="username">
													<div class="signed-user-icon"></div>
												</div><span class="name-text" id="header-user-name">*</span>
												<div class="rf-caret blue"></div>
											</div>
										</button>
									<li class="sign-in-btn-li sign-lang-wrapper__item" id="header-anonym-menu" style="display: flex;">
										<a class="sign-in-btn rf-rectangle-btn rf-40 rf-en" aria-label="Sign In" href="https://hostaring.com/en/account/enter_registration.php"> <span>Login</span>
										</a>
									</li>
									<li class="sign-lang-item-tr change-lang-wrapper sign-lang-wrapper__item mobile-dropdown">
										<button class="current-lang focus-invisible" id="currentLang" aria-expanded="false" aria-haspopup="true" aria-controls="chooseLang" style="display:flex;align-items:center;padding-left: 30px">
											<img class="flag-icon current-lang" src="https://hostaring.com/img/flag/en.svg" alt="Flag Icon">
											<div class="current-lang rf-lang az">EN</div>
											<div class="rf-caret"></div>
										</button>
										<div class="choose-lang" id="chooseLang" role="menu">
										   	<a class="lang-item-az" href="https://hostaring.az/az/sifarish/phpmail/texnikidestek.php" role="menuitem"> <span class="country-flag-az"></span>Azərbaycan</a>
										   	<a class="lang-item-tr" href="https://hostaring.com.tr/tr/siparis/phpmail/teknik-destek.php" role="menuitem"> <span class="country-flag-tr"></span>Türkce</a>
										   	<a class="lang-item-ru" href="https://hostaring.ru/ru/zakazyvat/phpmail/tekhnicheskaya-podderzhka.php" role="menuitem"> <span class="country-flag-ru"></span>Русские</a>
										   	

										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="hamburger-wrapper">
				<div class="hamburger-btn" id="hamburger">
					<svg id="ht" viewBox="0 0 15 15">
						<rect x="3" y="5" width="9" rx="0.6" height="1"></rect>
					</svg>
					<svg id="hb" viewBox="0 0 15 15">
						<rect x="3" y="9" width="9" rx="0.6" height="1"></rect>
					</svg>
				</div>
			</div>
		</div>
	</header>
	<main class="w-100">
        <div id="content" class="mx-0 w-100">
                <div id="banner" class="pt-4 pt-md-0">
        <div class="container pt-5 pt-md-0">
            <div class="pt-5 mb-5 text-left" id="home-title">
                

            </div>
            <div class="row text-center"></div>

                </div>
            </div>
        </div>


    <div class="container"><br><br><br>
        <div class="panel mr-auto ml-auto text-center p-5 mb-5">
            <h2 class="mb-4"><strong>Your order has been sent!</strong></h2>
            <h5 class="mb-4">Your "Technical Support" order has been successfully shipped. You will be contacted within 2 business days. If you have limited time, contact us now by clicking the "Direct Call" button.</h5>
            <a href="tel:+994703001180" class="btn btn-primary btn-lg btn-blue-gr">Call directly</a>
        </div>


    </div>
    </main>
<div class="foot pt-5">
    <div class="container">
        <div class="d-flex flex-wrap flex-md-nowrap justify-content-between">
            <div class="mb-3 mb-md-5 footer-top">
                <a href="https://hostaring.com">
            <img src="https://hostaring.com/img/general/hostaring_black_logo.png" class="lozad" id="brand-img" title="Return to the homepage" alt="hostaring.com black logo">
                </a>
            </div>
            <div class="mb-3 mb-md-5 footer-top">
                <small>
                    <p>
                        <a href="tel:+994703001180" class="phoneLink"><span class="phone"><i class="fas fa-phone-alt"></i> +994 70 300 11 80</span></a>
                    </p>
                    <p>
                        <span class="homeIcon"></span><span class="street">Mardakan</span> <span class="postcode">1044</span> <span class="city">Baku</span> <span class="country">Azerbaijan</span>
                    </p>
                </small>

            </div>
        </div>
        <div class="d-flex flex-wrap flex-column flex-sm-row flex-lg-nowrap justify-content-start justify-content-sm-between mb-3">
            <div>
                <h5 class="pb-3 mb-3"><strong>Platforms</strong></h5>
                <ul class="list-unstyled">
                                            <li class="mb-2">
                            <a href="https://hostaring.com">
                                Homepage
                            </a>
                        </li>

                                            <li class="mb-2">
                            <a href="https://hostaring.com/en/services">
                                Our services
                            </a>
                        </li>
                                            <li class="mb-2">
                            <a href="https://hostaring.com/en/pricing">
                                Pricing
                            </a>
                        </li>

                                            <li class="mb-2">
                            <a href="https://hostaring.com/en/contact">
                                Contact
                            </a>
                        </li>
                                            

                </ul>
            </div>
            <div>
                <h5 class="pb-3 mb-3"><strong>Our services</strong></h5>
                <ul class="list-unstyled">
                                            <li class="mb-2">
                            <a href="https://hostaring.com/en/order/website-order.php"
                                                            >
                                Website order
                            </a>
                        </li>
                    
                                                                <li class="mb-2">
                            <a href="https://hostaring.com/en/services"
                                                            >
                                Updating the software
                            </a>
                    </li>
                                            <li class="mb-2">
                                                
                                                
                            <a href="https://hostaring.com/en/services"
                                                            >
                                Logo design
                            </a>
                    </li>
                                                                <li class="mb-2">
                            <a href="https://hostaring.com/en/services"
                                                            >
                                SEO Service
                            </a>
                    </li>


                                            <li class="mb-2">
                            <a href="https://hostaring.com/en/services"
                                                            >
                                SMM Service
                            </a>
                        </li>

                                    </ul>
            </div>
            <div>
                <h5 class="pb-3 mb-3"><strong>Pricing</strong></h5>
                <ul class="list-unstyled">
                                            <li class="mb-2">
                            <a href="https://hostaring.com/en/pricing">
                                Overview
                            </a>
                        </li>                        <li class="mb-2">
                            <a href="https://hostaring.com/website-development">
                                Website development
                            </a>
                        </li>

                                    </ul>
            </div>
            <div>
                <h5 class="pb-3 mb-3"><strong>Types of communication</strong></h5>
                <ul class="list-unstyled">
                                            <li class="mb-2">
                            <a href="https://hostaring.com/en/contact">
                                Communication via the website
                            </a>
                        </li>
                                            <li class="mb-2">
                            <a href="tel:+994703001180">
                                Direct communication
                            </a>
                        </li>
                                    </ul>
    </div>
    <div>
    </div>
    </div>
    </div>
<footer class="footer py-3 w-100 mx-0">
    <div class="container d-flex justify-content-between">
        <div class="mr-auto my-auto">
            <small>
                <a class="white-link" href="https://hostaring.com/general_terms">General terms</a>
                •
                <a class="white-link" href="https://hostaring.com/privacy_policy">Privacy Policy</a> 
            </small>
        </div>
        <div class="ml-auto">
            <a class="footer-link mr-2" href="https://facebook.com/PremiumSiteaz-102684921869781" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a class="footer-link mr-2" href="https://instagram.com/hostaring.com?igshid=gqxj1bs10raa" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="footer-link" href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>
    <!-- Scripts -->
    <div itemscope itemtype="http://schema.org/Person">
</div>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});
</script>    
<script src="https://hostaring.com/js/layout.min.js"></script>
<!-- JQuery -->
<script src="https://hostaring.com/vendor/jquery/jquery.min.js"></script>
<!-- Popper -->

<!-- Bootstrap -->
<script src="https://hostaring.com/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Lozad -->
<script src="https://hostaring.com/vendor/lozad/dist/lozad.min.js"></script>


<!-- Custom scripts -->

<script type="text/javascript" defer>
    const observer = lozad();
    observer.observe();

    $(document).ready (function() {
        $('a').not('.locale-select').attr('rel', 'alternate');
        $('a').not('.locale-select').attr('hreflang', 'az');

        $('#flash-overlay-modal').modal();

        $('div.alert-success').not('.alert-important').delay(3000).fadeOut(350);
        $('div.alert-danger').not('.alert-important').delay(3000).fadeOut(350);

        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });

        $locales = {"en":{"locale":"az","flag":"az","text":"AZ"}};
        $country = sessionStorage.getItem('country');

        if ($country === null || $country == 'az') {
            $lang = 'az';
            switch ($lang) {
                case 'az':
                    $country = 'az';
                    break;
            }
        }
        $flag = $locales[$country]['flag'];
        $address = [];

switch ($flag) {
            case 'az':
                $address['eoName'] = 'PremiumSite';
                $address['homeIcon'] = '<i class="fas fa-home"></i>&nbsp;';
                $address['phone'] = '<i class="fas fa-phone-alt"></i> +994 70-300-11-80';
                $address['phoneLink'] = '+994703001180';
                $address['street'] = 'Mardakan';
                $address['postcode'] = '1044';
                $address['city'] = 'Baku';
                if($country === "az"){
                    $address['country'] = 'Azerbaijan';
                }else if($country === "az"){
                    $address['country'] = 'Azerbaijan';
                }
        
                break;
        }
        $('.homeIcon').html($address['homeIcon']);
        $('.phoneLink').attr('href', 'tel:'+$address['phoneLink']);
        $('.phone').html($address['phone']);
        $('.street').html($address['street']);
        $('.postcode').html($address['postcode']);
        $('.city').html($address['city']);
        $('.country').html($address['country']);
        $('.vat').html($address['vat']);


        $('.locale-select').each(function(index) {
            if ($(this).data('country') == $country) {
                $(this).addClass('disabled');
            }
        });

        if ($country != 'az') {
            $('.locale-text').html($locales[$country]['text']);
        }
     $('.locale-select').click(function(e) {
            e.preventDefault();
            sessionStorage.setItem('country', $(this).data('country'));
            window.location.replace($(this).attr('href'));
        });
    });

    var $window = $(window);
    var elements = $('.scroll-animate')

    $window.on('scroll resize', function() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each(elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position+element_height);

            if ((element_bottom_position <= (window_top_position + element_height+700)) && (element_bottom_position > window_top_position)) {
                $animation = $element.data('animation');
                $element.css('visibility', 'visible');
                $element.addClass('animated '+$animation);
            }
        })
    });

    alignFooterDropdown($(window).width());

    $(window).resize(function() {
        alignFooterDropdown($(window).width());
    });

    function alignFooterDropdown($width) {
        $menu = $('.foot .dropdown-menu');
        if ($width < 768) {
            if (!$menu.hasClass('dropdown-menu-left')) {
                $menu.removeClass('dropdown-menu-right');
                $menu.addClass('dropdown-menu-left');
            }
        } else {
            if (!$menu.hasClass('dropdown-menu-right')) {
                $menu.addClass('dropdown-menu-right');
                $menu.removeClass('dropdown-menu-left');
            }
        }
    }

    $nav = $('.navbar.fixed-top');
    $('.navbar-toggler').click(function() {
        $i = $(this).children('.fas');
        if ($i.hasClass('fa-bars')) {
            $i.removeClass('fa-bars');
            $i.addClass('fa-times');
            if ($nav.hasClass('nav-transparent')) {
                $nav.removeClass('nav-transparent');
            }
        } else {
            $i.removeClass('fa-times');
            $i.addClass('fa-bars');
        }
    });
</script>

    <script type="text/javascript">
        $('.request-open').click(function(e) {
            e.preventDefault();
            $('#request-form').css('display', 'block');
            $('#request-submitted').css('display', 'none');
            $('#submitted-header').html();
            $('#requestMerchant').addClass('slideInUp');
            $('#requestMerchant').removeClass('slideOutDown');
            $('#requestMerchant').css('display', 'block');
        });

        $('.request-close').click(function(e) {
            e.preventDefault();
            $('#requestMerchant').removeClass('slideInUp');
            $('#requestMerchant').addClass('slideOutDown');
        });

        $('#requestFrm').submit(function(e) {
            e.preventDefault();
            $.ajax({
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              url: $(this).prop('action'),
              type: 'POST',
              data: $(this).serializeArray()
            })
            .done(function($data, $status) {
                $('#submitted-header').html('Thanks for inviting '+$data+'!');
                $('#request-form').css('display', 'none');
                $('#request-submitted').css('display', 'block');
                $('#requestFrm').find("input[type=text], textarea, input[type=email]").val("");
            })
            .fail(function($xhr, $status, $error) {
                $errors = $xhr['responseJSON']['errors'];
                displayErrors($errors);
            });
        })
    </script>


    <script type="text/javascript">
        $('.navbar.fixed-top').addClass('nav-transparent');

        $(window).on('scroll resize', function() {
            if($(window).scrollTop() >= 50) {
                $('.navbar.fixed-top').removeClass('nav-transparent');
            }
        });
        
        
    </script>

<script type="text/javascript">
function IE(e) {
     if (navigator.appName == "Microsoft Internet Explorer" && (event.button == "2" || event.button == "3")) {
          alert('It appears that you have come to the site for a different purpose ;)');
          return false;
     }
}
function NS(e) {
     if (document.layers || (document.getElementById && !document.all)) {
          if (e.which == "2" || e.which == "3") {
               alert('It appears that you have come to the site for a different purpose ;)');
               return false;
          }
     }
}
document.onmousedown=IE;document.onmouseup=NS;document.oncontextmenu=new Function("return false");
//-->
</script>

<?php 
ob_start();
session_start();



$smtpuser="info@certmetricis.com";
$smtphost="smtp.hostinger.com";
$smtpport="465";
$smtppass="Milyarder200!";



if (isset($_POST['technical-support']  )) {


	
	$name = htmlspecialchars(trim($_POST['name'])); 
	$surname = htmlspecialchars(trim($_POST['surname'])); 
	$phone = htmlspecialchars(trim($_POST['phone'])); 
	$email = htmlspecialchars(trim($_POST['email'])); 
	$message = htmlspecialchars(trim($_POST['message'])); 


	include 'class.phpmailer.php';
	$email=$smtpuser;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = $smtphost;
	$mail->Port = $smtpport;
	$mail->SMTPSecure = 'ssl';
	$mail->Username = $smtpuser;
	$mail->Password = $smtppass;
	$mail->SetFrom($mail->Username, $email);
	$mail->AddAddress($email, $name);
	$mail->AddAddress($email, $name);
	$mail->CharSet = 'UTF-8';
	$mail->Subject = 'Technical support';

	$content = '
	<b>Saytdan gələn sifariş</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">

		<tr>
			<td class="tg-031e">Name</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$name.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Surname</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$surname.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Phone</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$phone.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Email</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$email.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Message</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$message.'</td>
		</tr>
	</table>';




	$mail->MsgHTML($content);
	if($mail->Send()) {

		header("https://hostaring.com/az/sifarish/customer-support?texnikidestek=ok");
		header("https://hostaring.com/az/sifarish/website-support?saytsifarisi=ok");
	} 
	else {
			// bir sorun var, sorunu ekrana bastıralım
		header("Location:https://hostaring.com/az/sifarish/customer-support?texnikidestek=no");
		header("Location:https://hostaring.com/az/sifarish/website-support-support?saytsifarisi=no");
	}



}

exit;









