@php
  $content_post = get_post(get_the_ID());
  $content = $content_post->post_content;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
@endphp

<section class="page-content">
  <div class="container">
    <article {{ post_class() }}>
      {!! $content !!}
    </article>
  </div>
</section>
