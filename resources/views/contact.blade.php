@extends('header')
@section('title', 'Kontakt')
@section('content')
      <div class="column is-4 contactUsText">
        <h1 class="title">Om oss</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
      </div>
      <div class="column is-6 has-text-centered contactForm">
        <form class="contactUsForm" action="VAR SKA DET SKICKAS" method="post">
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2168.1401482501774!2d12.255847515711219!3d57.083360480930054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46502afc2b7b95e3%3A0x30844442780526e0!2zVMOlbmdrw7ZyYXJ2w6RnZW4gNCwgNDMyIDU0IFZhcmJlcmc!5e0!3m2!1ssv!2sse!4v1560255658014!5m2!1ssv!2sse" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      </div>
@endsection
</body>
</div>
</html>
