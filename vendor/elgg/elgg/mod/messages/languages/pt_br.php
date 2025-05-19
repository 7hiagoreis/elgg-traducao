<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	/**
	* Menu items and titles / Itens do Menu e Títulos
	*/

	'messages' => "Mensagens",
	'messages:unreadcount' => "%s não lida(s)",
	'messages:user' => "Caixa de Entrada de %s",
	'messages:inbox' => "Caixa de Entrada",
	'messages:sent' => "Enviadas",
	'messages:message' => "Mensagem",
	'messages:title' => "Assunto",
	'messages:to:help' => "Digite o Nome de Usuário do Destinatário aqui.",
	'messages:sendmessage' => "Enviar Mensagem",
	'messages:add' => "Escrever Mensagem",
	'messages:sentmessages' => "Mensagens Enviadas",
	'messages:toggle' => "Alternar Tudo",
	'messages:markread' => "Marcar como lida",

	'messages:error' => 'Houve um problema ao salvar a sua Mensagem. Por favor, tente novamente.',

	'item:object:messages' => 'Mensagem',
	'collection:object:messages' => 'Mensagens',

	/**
	* Status messages / Mensagens de Status
	*/

	'messages:posted' => "Sua Mensagem foi enviada com sucesso!",
	'messages:success:delete' => "Mensagens Excluídas",
	'messages:success:read' => "Mensagens marcadas como lidas",
	'messages:error:messages_not_selected' => "Nenhuma Mensagem selecionada",

	/**
	* Email messages / Mensagens de E-mail
	*/

	'messages:email:subject' => 'Você tem uma Nova Mensagem!',
	'messages:email:body' => "Você recebeu uma Nova Mensagem de %s.,

O texto diz:

%s

Para ver as suas Mensagens, clique aqui:
%s

Para enviar uma Mensagem a %s, clique aqui:
%s",

	/**
	* Error messages / Mensagens de Erro
	*/

	'messages:blank' => "Desculpe, você precisa digitar algo no Corpo da Mensagem antes de salvar.",
	'messages:nomessages' => "Não há Mensagens.",
	'messages:user:nonexist' => "Não encontramos o Destinatário na Base de Usuários.",
	'messages:user:blank' => "Você não selecionou ninguém para enviar a Mensagem.",
	'messages:user:self' => "Você não pode enviar uma Mensagem para si mesmo.",
	'messages:user:notfriend' => "Você não pode enviar uma Mensagem para um Usuário que não é seu amigo.",

	'messages:deleted_sender' => 'Usuário Excluído',
	
	/**
	* Settings / Configurações
	*/

	'messages:settings:friends_only:label' => 'Só é possível enviar Mensagens para Amigos',
	'messages:settings:friends_only:help' => 'O Usuário não poderá enviar Mensagens se o Destinatário não for seu Amigo',
);
