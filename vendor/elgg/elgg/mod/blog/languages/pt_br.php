<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	'item:object:blog' => 'Blog',
	'collection:object:blog' => 'Blogs',
	'collection:object:blog:all' => 'Todos os Blogs do Site',
	'collection:object:blog:owner' => 'Blogs de %s',
	'collection:object:blog:group' => 'Blog do Grupo',
	'collection:object:blog:friends' => 'Blogs dos Amigos',
	'add:object:blog' => 'Adicionar Publicação no Blog',
	'edit:object:blog' => 'Editar Publicação no Blog',
	'notification:object:blog:publish' => "Enviar uma Notificação quando um Blog for Publicado",
	'notifications:mute:object:blog' => "sobre o blog '%s'",
	'menu:blog_archive:header' => "Arquivos do Blog",

	'blog:revisions' => 'Revisões',
	'blog:archives' => 'Arquivos',

	'groups:tool:blog' => 'Ativar Blog do Grupo',
	'groups:tool:blog:description' => 'Permitir que os Membros do Grupo criem um Blog neste Grupo.',

	// Editing / Editando
	'blog:excerpt' => 'Resumo',
	'blog:body' => 'Conteúdo',
	'blog:save_status' => 'Última Alteração: ',


	'blog:revision' => 'Revisão',
	
	// messages / Mensagens
	'blog:message:saved' => 'Publicação do Blog salva!',
	'blog:error:cannot_save' => 'Não foi possível salvar a publicação do blog.',
	'blog:error:cannot_write_to_container' => 'Permissão insuficiente para salvar o blog neste grupo.',
	'blog:edit_revision_notice' => '(Versão antiga)',
	'blog:none' => 'Nenhuma publicação de blog',
	'blog:error:missing:title' => 'Por favor, insira um título para o blog!',
	'blog:error:missing:description' => 'Por favor, insira o conteúdo do blog!',
	'blog:error:post_not_found' => 'Não foi possível encontrar a publicação do blog especificada.',
	'blog:error:revision_not_found' => 'Não foi possível encontrar esta revisão.',


	// river / Atividades
	'river:object:blog:create' => '%s publicou uma postagem no blog %s',
	'river:object:blog:comment' => '%s comentou na publicação do blog %s',

	// notifications / Notificações
	'blog:notify:summary' => 'Nova publicação no blog chamada %s',
	'blog:notify:subject' => 'Nova publicação no blog: %s',
	'blog:notify:body' => '%s publicou um novo post: %s

%s

Ver e comentar na publicação do Blog:
%s',
	
	'notification:mentions:object:blog:subject' => '%s mencionou você em uma publicação do blog',

	// widget
	'widgets:blog:name' => 'Publicações do Blog',
	'widgets:blog:description' => 'Exibe suas últimas Publicações do Blog',
	'blog:moreblogs' => 'Mais Publicações do Blog',
	'blog:numbertodisplay' => 'Número de Publicações do Blog para Exibir',
);
