@php
$defaul_btn_type = "warning";
@endphp

<form
  action-xhr="{{ $action }}"
  target="_top"
  method="post"
  novalidate=""
  class="i-amphtml-form"
>
  <div class="flex flex-column m0">
    <label
      class="bold center text-left mr1 mt2 mb1"
      for="{{ $field_name }}"
      aria-label="Email Address"
    >
      Subscribe for the latest offers by email
    </label>
    
    <div class="">
      <div class="w-full flex flex-column flex-row">
        <input
          id="{{ $field_name }}"
          name="{{ $field_name }}"
          type="email"
          placeholder="Enter Email Address..."
          class="border border-light mr2 py1 p2 rounded w-full"
        >
        <button
          name="subscribe"
          type="submit"
          class="flex-1 bg-black cursor-pointer m0 mt1 py1 p2 rounded text-white bg-{{ $submit_btn_type }}"
        >
          {{ $submit_text }}
        </button>
      </div>
    </div>
  </div>
</form>