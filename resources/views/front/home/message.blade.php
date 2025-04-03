<section class="pt-5 pb-5">
    <div class="container pt-md-5">
        <div class="row">
            <div class="col-md-6 col-lg-4 pt-3 m-auto box--item wow bounceInUp" data-wow-duration="2s">
               <div class="d-flex align-items-center gap-2 text-center">
                   <span class="span2">
                       <svg width="8" height="45" viewBox="0 0 8 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="8" height="48" rx="4" fill="#fff"/>
                           </svg>
                       {{__('Our Message') }}
                   </span>
                <span class="span1">
                    <img src="{{ asset(getSettingValue('message_image')) }}" width="56" alt="">
                </span>
               </div>
                <div class="message">
                    <div class="p-5 text-white">
                        {!! getSettingValue('message_'.app()->getLocale()) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pt-3 m-auto box--item  wow bounceInUp" data-wow-duration="2s">
               <div class="d-flex align-items-center gap-2 text-center">
                   <span class="span2">
                       <svg width="8" height="45" viewBox="0 0 8 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="8" height="48" rx="4" fill="#fff"/>
                           </svg>
                       {{__('Our Golas') }}
                   </span>
                <span class="span1">
                    <img src="{{ asset(getSettingValue('goals_image')) }}" width="56" alt="">
                </span>
               </div>
                <div class="message">
                    <div class="p-5 text-white">
                        {!! getSettingValue('our_goal_'.app()->getLocale()) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 pt-3 m-auto box--item  wow bounceInUp" data-wow-duration="2s">
               <div class="d-flex align-items-center gap-2 text-center">
                   <span class="span2">
                       <svg width="8" height="45" viewBox="0 0 8 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="8" height="48" rx="4" fill="#fff"/>
                           </svg>
                       {{__('Our Value') }}
                   </span>
                <span class="span1">
                    <img src="{{ asset(getSettingValue('value_image')) }}" width="56" alt="">
                </span>
               </div>
                <div class="message">
                    <div class="p-5 text-white">
                        {!! getSettingValue('our_value_'.app()->getLocale()) !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
