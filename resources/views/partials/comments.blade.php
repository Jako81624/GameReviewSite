<div class="post-comments">

    <form>
        <div class="form-group">
            <label for="comment">Your Comment</label>
            <textarea name="comment" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Send</button>
    </form>

    <div class="comments-nav">
        <ul class="nav nav-pills">
            <span class="pull-right">{!!$pagination!!}</span>
        </ul>
    </div>

    <div class="row">
        @foreach ($x as $xw)
            @foreach ($xw as $project)
                @include('partials.comment', $project)
            @endforeach
        @endforeach
    </div>
</div>
<!-- post-comments -->
<script>$('[data-toggle="collapse"]').on('click', function () {
        var $this = $(this),
                $parent = typeof $this.data('parent') !== 'undefined' ? $($this.data('parent')) : undefined;
        if ($parent === undefined) { /* Just toggle my  */
            $this.find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
            return true;
        }

        /* Open element will be close if parent !== undefined */
        var currentIcon = $this.find('.glyphicon');
        currentIcon.toggleClass('glyphicon-plus glyphicon-minus');
        $parent.find('.glyphicon').not(currentIcon).removeClass('glyphicon-minus').addClass('glyphicon-plus');

    });
</script>