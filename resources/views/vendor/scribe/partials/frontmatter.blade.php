title: {{ $settings['title'] }}

language_tabs:
@foreach($settings['languages'] as $language)
- {{ $language }}
@endforeach

includes:
- "./prepend.md"
- "./authentication.md"
- "./groups/*"
- "./errors.md"
- "./append.md"

logo: {{ $settings['logo'] ?? false }}

toc_footers:
@if($showPostmanCollectionButton)
- <a href="docs/{{ $postmanCollectionLink }}">View Postman collection</a>
@endif
@if($showOpenAPISpecButton)
- <a href="docs/{{ $openAPISpecLink }}">View OpenAPI (Swagger) spec</a>
@endif
