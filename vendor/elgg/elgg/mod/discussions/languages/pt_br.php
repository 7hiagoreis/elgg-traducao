<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	'item:object:discussion' => "Assunto da Conversa",
	
	'add:object:discussion' => 'Adicionar Assunto da Conversa',
	'edit:object:discussion' => 'Editar Assunto',
	'collection:object:discussion' => 'Assunto da Conversa',
	'collection:object:discussion:group' => 'Assuntos do Grupo',
	'collection:object:discussion:my_groups' => 'Assuntos nos meus Grupos',
	'notification:object:discussion:create' => "Enviar Notificação quando um Assuntos da Conversa for criado",
	'notifications:mute:object:discussion' => "sobre o assunto da conversa '%s'",
	
	'discussion:settings:enable_global_discussions' => 'Permitir Assuntos de Conversas Globais',
	'discussion:settings:enable_global_discussions:help' => 'Permite criar Assuntos de Conversa fora dos Grupos',

	'discussion:latest' => 'Conversas mais recentes',
	'discussion:none' => 'Nenhuma conversa iniciada',
	'discussion:updated' => "Comentado por %s há %s",

	'discussion:topic:created' => 'O assunto da conversa foi criado.',
	'discussion:topic:updated' => 'O assunto da conversa foi atualizado.',
	'entity:delete:object:discussion:success' => 'O assunto da conversa foi excluído.',

	'discussion:topic:notfound' => 'Assunto da conversa não encontrado',
	'discussion:error:notsaved' => 'Não foi possível salvar este assunto',
	'discussion:error:missing' => 'Título e mensagem são campos obrigatórios',
	'discussion:error:permissions' => 'Você não tem permissão para realizar esta ação',
	'discussion:error:no_groups' => 'Você não participa de nenhum grupo.',


	/**
	 * River / Atividades
	 */
	'river:object:discussion:create' => '%s adicionou uma nova conversa: %s',
	'river:object:discussion:comment' => '%s comentou na conversa: %s',
	
	/**
	 * Notifications / Notificações
	 */
	'discussion:topic:notify:summary' => 'Novo Assunto da Conversa chamado %s',
	'discussion:topic:notify:subject' => 'Novo Assunto da Conversa: %s',
	'discussion:topic:notify:body' => '%s adicionou um novo assunto de conversa chamado "%s":,


%s

Visualizar e responder ao assunto:
%s',

	'discussion:comment:notify:summary' => 'Novo comentário no assunto: %s',
	'discussion:comment:notify:subject' => 'Novo comentário no assunto: %s',
	'discussion:comment:notify:body' => '%s comentou na conversa "%s":,


%s

Visualizar e comentar no assunto:
%s',
	
	'notification:mentions:object:discussion:subject' => '%s mencionou você em uma conversa',

	'groups:tool:forum' => 'Ativar Assuntos de Conversa no Grupo',
	'groups:tool:forum:description' => 'Permitir que os Membros do Grupo iniciem um Assunto de Conversa aqui.',

	'discussions:groups:edit:add_group_subscribers_to_discussion_comments' => 'Incluir inscritos do Grupo nas Notificações de comentários dos Assuntos das Conversas',

	
	/**
	 * Discussion status / Status do Assunto
	 */
	'discussion:topic:status' => 'Status do Assunto de Conversa',
	'discussion:topic:closed:title' => 'Esta Conversa está Fechada.',
	'discussion:topic:closed:desc' => 'Este Assunto de Conversa está fechado e não aceita novos comentários.',
	'discussion:topic:container' => 'Escolha um grupo opcional para iniciar este Assunto de Conversa',
	'discussion:topic:container:help' => 'Iniciar um Assunto de Conversa em um Grupo limita o acesso somente aos membros do grupo, por padrão',

	'discussion:topic:description' => 'Mensagem da Conversa',
	'discussion:topic:toggle_status:open' => 'O Assunto da Conversa foi reaberto com sucesso!',
	'discussion:topic:toggle_status:open:confirm' => 'Tem certeza que deseja reabrir esta Conversa?',
	'discussion:topic:toggle_status:closed' => 'O Assunto da Conversa foi fechado com sucesso!',
	'discussion:topic:toggle_status:closed:confirm' => 'Tem certeza que deseja fechar esta Conversa?',
	
	// widgets
	'widgets:discussions:name' => 'Assuntos de Conversa',
	'widgets:discussions:description' => 'Mostra os Assuntos de Conversa Recentes',
);
