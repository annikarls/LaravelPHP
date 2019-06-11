@extends('header')
@section('title', 'Kontakt')
@section('content')
      <div class="column is-4 contactUsText">
        <h1 class="title logo">ö.l</h1>
        <h1 class="title">Om oss</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
      </div>
      <div class="column is-6 has-text-centered contactForm">
        <form class="contactUsForm" action="URL" method="post">
          <h1 class="title">Kontakta oss</h1>
          <input class="input" type="text" name="sendersName" placeholder="Namn">
          <input class="input" type="email" name="sendersEmail" placeholder="E-post">
          <textarea class="textarea" placeholder="Meddelande"></textarea>
          <br>
          <button class="button is-link" type="submit" name="button">Skicka</button>
        </form>
      </div>
      <div class="column has-text-centered map is-12">
        <h1 class="title">Här hittar du oss</h1>
        <p>Här ska en karta vara </p>
      </div>
@endsection
</body>
</html>
