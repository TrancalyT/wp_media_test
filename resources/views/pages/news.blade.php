<div class="separator" id="news-title">
    <h1>NEWS</h1>
</div>
<section id="news">
    <div class="container">
        @forelse($newsData as $news)
            <article>
                <h1>{{$news['title']}}</h1>
                <strong>{{$news['keywords']}}</strong>
                <p>{{$news['text']}}</p>
            </article>
        @empty 
            <article>
                <h1>Lorem Ipsum</h1>
                <strong>#lorem, #ipsum</strong>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aut incidunt, nihil accusamus, quis quaerat libero repellendus iste eaque odit earum modi impedit inventore laboriosam, numquam quas enim veritatis id.
                </p>
            </article>
        @endforelse

        <article>
            <h1>Lorem Ipsum</h1>
            <strong>#lorem, #ipsum</strong>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aut incidunt, nihil accusamus, quis quaerat libero repellendus iste eaque odit earum modi impedit inventore laboriosam, numquam quas enim veritatis id.
            </p>
        </article>
        <article>
            <h1>Lorem Ipsum</h1>
            <strong>#lorem, #ipsum</strong>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aut incidunt, nihil accusamus, quis quaerat libero repellendus iste eaque odit earum modi impedit inventore laboriosam, numquam quas enim veritatis id.
            </p>
        </article>
        <article>
            <h1>Lorem Ipsum</h1>
            <strong>#lorem, #ipsum</strong>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aut incidunt, nihil accusamus, quis quaerat libero repellendus iste eaque odit earum modi impedit inventore laboriosam, numquam quas enim veritatis id.
            </p>
        </article>
    </div>
</section>