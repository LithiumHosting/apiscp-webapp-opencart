@component('email.indicator', ['status' => 'success'])
	Your application is installed.
@endcomponent

@component('mail::message')
{{-- Body --}}
# Howdy!

{{ $appname }} has been successfully installed on {{ $uri }}!

## Store Login
You can access the Store at [{{$proto}}{{$uri}}{{LithiumHosting\WebApps\OpenCart\Handler::ADMIN_PATH}}]({{$proto}}{{$uri}}{{LithiumHosting\WebApps\OpenCart\Handler::ADMIN_PATH}}) using the following information:

**Login**: <code>{{$adminuser}}</code><br/>
**Password**: <code>{{ str_replace('@', '\\@', $adminpassword) }}</code>

If you wish to further configure {{ $appname }}, please refer to [the official documentation](http://docs.opencart.com/en-gb/getting-started/).

Upon logging into OpenCart for the first time, you will be prompted to change the Admin path.
This is highly recommended, follow the directions below to enable Write Mode for your app and then proceed with the Admin directory change,
OpenCart will handle this process automatically.

---

Security is important with any application, so extra steps are taken to reduce
the risk of hackers. By default **Maximum** Fortification is enabled. This will
work for most people, but if you run into any problems change Fortification to
**Minimum**.

Here's how to do it:

1. Visit **Web** > **Web Apps** in {{PANEL_BRAND}}
2. Select {{ $appname }} installed under **{{$uri}}**
3. Select **Fortification (MIN)** under _Actions_

You can learn more about [Fortification technology]({{MISC_KB_BASE}}/control-panel/understanding-fortification/) within the [knowledgebase]({{MISC_KB_BASE}}).

@include('email.webapps.common-footer')
@endcomponent