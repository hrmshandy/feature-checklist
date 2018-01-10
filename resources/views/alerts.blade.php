<style>
    .feature-checklist {
        display: inline-flex;
        align-items: center;
        position: relative;
        height: 56px;
    }
    .feature-checklist__status {
        width: 24px;
        height: 24px;
        display: inline-block;
        border-radius: 100%;
        position: relative;
    }

    .feature-checklist__status > svg {
        position: absolute;
    }

    .feature-checklist__status.is-checked > .icon-checked {
        display: block;
        fill: green;
    }
    .feature-checklist__status.is-checked > .icon-failed {
        display: none;
    }

    .feature-checklist__status.is-failed > .icon-failed {
        display: block;
        fill: red;
    }
    .feature-checklist__status.is-failed > .icon-checked {
        display: none;
    }
    
    .feature-checklist__lists {
        position: absolute;
        box-shadow: 0 0 5px rgba(0,0,0,0.15);
        padding: 15px;
        background: #fff;
        border-radius: 4px;
        list-style: none;
        top: 100%;
    }
</style>

<div class="feature-checklist">
    <div class="feature-checklist__status is-checked">
        <svg class="icon-checked" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 44 44"><path d="m22,0c-12.2,0-22,9.8-22,22s9.8,22 22,22 22-9.8 22-22-9.8-22-22-22zm12.7,15.1l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.6-0.1-0.7-0.3l-7.8-8.4-.2-.2c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.3 0.4,0.9 0,1.3z"/></svg>
        <svg class="icon-failed" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 44 44"><path d="m22,0c-12.2,0-22,9.8-22,22s9.8,22 22,22 22-9.8 22-22-9.8-22-22-22zm3.2,22.4l7.5,7.5c0.2,0.2 0.3,0.5 0.3,0.7s-0.1,0.5-0.3,0.7l-1.4,1.4c-0.2,0.2-0.5,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.5-7.5c-0.2-0.2-0.5-0.2-0.7,0l-7.5,7.5c-0.2,0.2-0.5,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-1.4-1.4c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l7.5-7.5c0.2-0.2 0.2-0.5 0-0.7l-7.5-7.5c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.2-0.2 0.5-0.3 0.7-0.3s0.5,0.1 0.7,0.3l7.5,7.5c0.2,0.2 0.5,0.2 0.7,0l7.5-7.5c0.2-0.2 0.5-0.3 0.7-0.3 0.3,0 0.5,0.1 0.7,0.3l1.4,1.4c0.2,0.2 0.3,0.5 0.3,0.7s-0.1,0.5-0.3,0.7l-7.5,7.5c-0.2,0.1-0.2,0.5 3.55271e-15,0.7z"/></svg>
    </div>
    <ul class="feature-checklist__lists">
        @foreach($features as $feature)
        <li class="feature-checklist__item">
            {{ $feature->name }}
        </li>
        @endforeach
    </ul>
</div>

