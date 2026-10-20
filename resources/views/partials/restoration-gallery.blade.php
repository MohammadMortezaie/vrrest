            <div class="wd-gallery">
                <figure class="wd-gallery-main">
                    <img id="wd-gallery-image" src="{{ asset($projectImages[0]['src']) }}" alt="{{ $projectImages[0]['alt'] }}" width="1600" height="1067" loading="lazy" decoding="async">
                    <button type="button" class="wd-gallery-arrow wd-gallery-prev" aria-label="{{ __('WD Previous Photo') }}" aria-controls="wd-gallery-image" hidden>
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="m14 6-6 6 6 6"/></svg>
                    </button>
                    <button type="button" class="wd-gallery-arrow wd-gallery-next" aria-label="{{ __('WD Next Photo') }}" aria-controls="wd-gallery-image" hidden>
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="m10 6 6 6-6 6"/></svg>
                    </button>
                    <figcaption id="wd-gallery-caption">{{ $projectImages[0]['alt'] }}</figcaption>
                </figure>
                <div class="wd-gallery-thumbs" aria-label="{{ __('WD Choose Photo') }}">
                    @foreach ($projectImages as $image)
                        <button type="button" class="wd-gallery-thumb" aria-pressed="{{ $loop->first ? 'true' : 'false' }}" aria-controls="wd-gallery-image" aria-label="{{ __('WD Project Photo') }} {{ $loop->iteration }}" data-image="{{ asset($image['src']) }}" data-alt="{{ $image['alt'] }}">
                            <img src="{{ asset($image['src']) }}" alt="{{ $image['alt'] }}" width="160" height="120" loading="lazy" decoding="async"><span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        </button>
                    @endforeach
                </div>
                <p class="wd-gallery-status" aria-live="polite">{{ __('WD Project Photo') }} <span id="wd-gallery-number">1</span> / {{ count($projectImages) }}</p>
            </div>
