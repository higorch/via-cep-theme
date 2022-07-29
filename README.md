# Tema WordPress

Integrado com API ViaCep

![Tela](/assets/images/tela-1.png)

## Requisitos

- Requer ao menos WordPress: 6.0
- Versão mínima do PHP: 8.0

## Roteiro de teste

- Faça a instalação do WordPress.
- Clone o projeto/tema ou importe dentro da pasta themes.
- Visite o site.
- Informe o CEP que deseja consultar.
- Clique no icone de disquete caso queira salvar o endereço consultado.
- Acesse wp-admin > endereços para ver os endereços salvos e poder editar caso necessário.

## Recursos utilizados do core nativo do WordPress

- Custom post type
- Custom Metaboxes
- Funções nativas: language_attributes(), wp_head(), wp_body_open(), wp_footer(), get_header(), get_footer(), get_template_part()
- Tambem foi ulizido actions e hookes para requisição ajax e carregamento de scripts.