<footer class="bg-grey-lighter pt-2 pb-3 my-2">
  <div class="max-width-5 mx-auto">
    <button class="bg-light cursor-pointer p1 w-full flex justify-center items-center hidden" on="tap:header.scrollTo(duration=200)">
      <svg class="mr1" width="48" height="48">
        <use href="#back_to_top" xlink:href="#back_to_top"></use>
      </svg>
      Back to Top
    </button>
    
    <div class="flex justify-between">
    <div class="w-1/3 pl2">
    <form action-xhr="/newsletter/index" target="_top" method="post" novalidate="" class="i-amphtml-form">
    <div class="flex flex-column m0">
      <label class="bold center text-left mr1 mt2 mb1" for="email_address" aria-label="Email Address">Subscribe for the latest offers by email</label>
      
      <div class="">
        <div class="w-full flex flex-column flex-row">
          <input id="email_address" type="email" placeholder="Enter Email Address..." class="border border-light mr2 py1 p2 rounded w-full">
          <button name="subscribe" type="submit" class="flex-1 bg-black cursor-pointer m0 mt1 py1 p2 rounded text-white">Subscribe</button>
        </div>
      </div>
    </div>
  </form>
  
  <p class="hidden mt3 block">Follow Us</p>
  
  <div class="m2 m0 flex justify-between">
    <a href="//twitter.com" class="circle p1 flex items-center bg-white hover:bg-black text-black hover:text-white">
      <svg width="24" height="24">
        <use href="#twitter" xlink:href="#twitter"></use>
      </svg>
      <span class="hide">Twitter</span>
    </a>

<a href="//facebook.com" class="circle p1 flex items-center bg-white hover:bg-black text-black hover:text-white">
<svg width="24" height="24">
<use href="#facebook" xlink:href="#facebook"></use>
</svg>
<span class="hide">Facebook</span>
</a><a href="//instagram.com" class="circle p1 flex items-center bg-white hover:bg-black text-black hover:text-white">
<svg width="24" height="24">
<use href="#instagram" xlink:href="#instagram"></use>
</svg><span class="hide">Instagram</span>
</a><a href="//google.co.uk" class="circle p1 flex items-center bg-white hover:bg-black text-black hover:text-white">
<svg width="24" height="24">
<use href="#googlePlus" xlink:href="#googlePlus"></use>
</svg><span class="hide">Google+</span>
</a><a href="//pinterest.co.uk" class="circle p1 flex items-center bg-white hover:bg-black text-black hover:text-white">
<svg width="24" height="24">
<use href="#pinterest" xlink:href="#pinterest"></use>
</svg><span class="hide">Pinterest</span>
</a><a href="//youtube.com" class="circle p1 flex items-center bg-white hover:bg-black text-black hover:text-white">
<svg width="24" height="24">
<use href="#youtube" xlink:href="#youtube"></use>
</svg><span class="hide">YouTube</span>
</a>
</div>
</div>

<div class="border-b border-light nowrap border-none">
  <div class="flex">
    <section class="ml4">
    <h2 class="border-none border-light border-top m0 p2 text-md" role="button" tabindex="0" on="tap:AMP.setState({ footerAccordion: { help: !footerAccordion.help } })">Help</h2>
    
    <ul class="list-reset m0 block" [class]="footerAccordion.help ? 'list-reset m0 block' : 'list-reset m0 block'">
    <li><a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Customer Services</a></li>
    <li><a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Contact Us</a></li>
    <li><a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Store Finder</a></li>
    <li><a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Size Guides</a></li>
    <li><a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">FAQ</a></li>
    <li><a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Customer Care</a></li>
    </ul>
</section>
<section class="ml4 leading-normal">
  <h2
    class="text-lg border-none border-light border-top m0 p2 text-md"
    role="button"
    tabindex="0"
    on="tap:AMP.setState({ footerAccordion: { shopping: !footerAccordion.shopping } })"
  >
  Shopping with Us
  </h2>
  
  <ul
    class="list-reset m0 block"
    [class]="footerAccordion.shopping ? 'list-reset m0 block' : 'list-reset m0 block '"
  >
    <li>
      <a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Delivery</a>
    </li>
    <li>
      <a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Returns</a>
    </li>
    <li>
      <a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">About Us</a>
    </li>
    <li>
      <a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Jobs</a>
    </li>
    <li>
      <a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Track your Order</a>
    </li>
    <li>
      <a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">International Orders</a>
    </li>
  </ul>
</section>

<section class="ml4">
  <h2 class="border-none border-light border-top m0 p2 text-md" role="button" tabindex="0" on="tap:AMP.setState({ footerAccordion: { privacy: !footerAccordion.privacy } })">Privacy &amp; Security</h2><ul class="list-reset m0 block" [class]="footerAccordion.privacy ? 'list-reset m0 block' : 'list-reset m0 block '"><li>
<a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Terms &amp; Conditions</a></li><li>
<a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Competitions</a></li><li>
<a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Privacy Policy</a></li><li>
<a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Payment Methods</a></li><li>
<a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Cookies</a></li><li>
<a class="inline-block px2 p1 text-muted text-sm" href="/about-us-i1">Site Map</a></li></ul>
</section></div></div></div></div>
</footer>

<vs-page-footer-copyright />