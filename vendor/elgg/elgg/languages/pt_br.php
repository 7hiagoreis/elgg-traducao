<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
/**
 * Sites
 */

	'item:site:site' => 'Site',
	'collection:site:site' => 'Sites',
	'index:content' => '<p>Bem-vindo ao seu site Elgg.</p><p><strong>Dica:</strong> Muitos sites usam o Plugin <code>activity</code> para exibir uma linha do tempo de atividades nesta página.</p>',

/**
 * Sessions / Sessões
 */

	'login' => "Conectar",
	'loginok' => "Você foi conectado a rede!",
	'login:continue' => "Conecte ao sistema para continuar...",
	'login:empty' => "Nome de Usuário/E-mail e senha são obrigatórios.",
	'login:baduser' => "Não foi possível carregar a sua conta de usuário.",

	'logout' => "Desconectar",
	'logoutok' => "Você foi Desconectado.",
	'logouterror' => "Não conseguimos encerrar sua sessão. Por favor, tente novamente.",
	'session_expired' => "Sua sessão expirou. Por favor, <a href='javascript:location.reload(true)'>recarregue</a> a página para conectar-se.",
	'session_changed_user' => "Você foi conectado como outro usuário. Você deve <a href='javascript:location.reload(true)'>recarregar</a> a página.",

	'loggedinrequired' => "Você precisa conectar a rede para visualizar a página solicitada.",
	'loggedoutrequired' => "Você precisa sair da conta para visualizar a página solicitada.",
	'adminrequired' => "Você precisa ser Administrador para visualizar a página solicitada.",
	'membershiprequired' => "Você precisa ser Membro deste Grupo para visualizar a página solicitada.",
	'limited_access' => "Você não tem permissão para visualizar a página solicitada.",
	'invalid_request_signature' => "A URL da página que você está tentando acessar é inválida ou expirou.",

/**
 * Errors / Erros
 */

	'exception:title' => "Erro Fatal.",
	'exception:contact_admin' => 'Ocorreu um erro irreversível e ele foi registrado. Entre em contato com o Administrador do site com as seguintes informações:',

	'actionnotfound' => "O arquivo de ação para %s não foi encontrado.",
	'actionunauthorized' => 'Você não está autorizado a executar esta ação',

	'ajax:error' => 'Erro inesperado ao executar uma chamada AJAX. Talvez a conexão com o servidor tenha sido perdida.',
	'ajax:not_is_xhr' => 'Você não pode acessar visualizações AJAX diretamente',
	'ajax:pagination:no_data' => 'Nenhum dado de Nova Página encontrado',
	'ajax:pagination:load_more' => 'Carregar mais',

	'ElggEntity:Error:SetSubtype' => 'Use %s em vez do setter mágico para "subtipo"',
	'ElggEntity:Error:SetEnabled' => 'Use %s em vez de acessar diretamente "enabled" com setter mágico',
	'ElggEntity:Error:SetDeleted' => 'Use %s em vez de utilizar o setter mágico para "deleted"',
	'ElggUser:Error:SetAdmin' => 'Use %s no lugar do setter mágico para "admin"',
	'ElggUser:Error:SetBanned' => 'Utilize %s em vez de acessar "banned" diretamente com setter mágico',

	'PluginException:CannotStart' => '%s (guid: %s) não pôde ser iniciado e foi desativado. Motivo: %s',
	'PluginException:InvalidID' => "%s é um ID de plugin inválido.",
	'PluginException:PluginMustBeActive' => "Requer que o plugin '%s' esteja ativo.",
	'PluginException:PluginMustBeAfter' => "Requer estar posicionado após o plugin '%s'.",
	'PluginException:PluginMustBeBefore' => "Requer estar posicionado antes do plugin '%s'.",
	'ElggPlugin:MissingID' => 'ID do plugin ausente (guid %s)',
	'ElggPlugin:NoPluginComposer' => 'Arquivo composer.json ausente para o plugin ID %s (guid %s)',
	'ElggPlugin:StartFound' => 'Para o plugin ID %s foi encontrado um start.php. Isso pode indicar uma versão de plugin não suportada.',
	'ElggPlugin:IdMismatch' => 'O diretório deste plugin deve ser renomeado para "%s" para coincidir com o nome do projeto definido no composer.json do plugin.',
	'ElggPlugin:Error' => 'Erro no plugin',
	'ElggPlugin:Exception:CannotIncludeFile' => 'Não foi possível incluir %s para o plugin %s (guid: %s) em %s.',
	'ElggPlugin:Exception:IncludeFileThrew' => 'Exceção lançada ao incluir %s para o plugin %s (guid: %s) em %s.',
	'ElggPlugin:Exception:CannotRegisterViews' => 'Não foi possível abrir o diretório de views para o plugin %s (guid: %s) em %s.',
	'ElggPlugin:InvalidAndDeactivated' => '%s é um plugin inválido e foi desativado.',
	'ElggPlugin:activate:BadConfigFormat' => 'O arquivo do plugin "elgg-plugin.php" não retornou um array serializável.',
	'ElggPlugin:activate:ConfigSentOutput' => 'O arquivo do plugin "elgg-plugin.php" enviou saída.',

	'ElggPlugin:Dependencies:ActiveDependent' => 'Existem outros plugins que listam %s como dependência. Você deve desativar os seguintes plugins antes de desativar este: %s',
	'ElggPlugin:Dependencies:MustBeActive' => 'Deve estar ativo',
	'ElggPlugin:Dependencies:Position' => 'Posição',

	'ElggMenuBuilder:Trees:NoParents' => 'Foram encontrados itens de menu sem pais para vinculá-los',
	'ElggMenuBuilder:Trees:OrphanedChild' => 'Item de menu [%s] encontrado com pai ausente [%s]',
	'ElggMenuBuilder:Trees:DuplicateChild' => 'Registro duplicado encontrado para o item de menu [%s]',

	'RegistrationException:EmptyPassword' => 'Os campos de senha não podem ficar vazios.',
	'RegistrationException:PasswordMismatch' => 'As senhas devem ser iguais.',
	'LoginException:BannedUser' => 'Você foi banido deste site e não pode fazer login.',
	'LoginException:UsernameFailure' => 'Não foi possível fazer login. Verifique seu nome de usuário/email e senha.',
	'LoginException:PasswordFailure' => 'Não foi possível fazer login. Verifique seu nome de usuário/email e senha.',
	'LoginException:AccountLocked' => 'Sua conta foi bloqueada devido a várias tentativas de login falhadas.',
	'LoginException:ChangePasswordFailure' => 'Falha na verificação da senha atual.',
	'LoginException:Unknown' => 'Não foi possível fazer login devido a um erro desconhecido.',
	'LoginException:AdminValidationPending' => 'Sua conta precisa ser validada por um administrador antes que você possa usá-la. Você será notificado quando a validação for concluída.',
	'LoginException:DisabledUser' => 'Sua conta foi desativada. Você não tem permissão para fazer login.',

	'UserFetchFailureException' => 'Não foi possível verificar a permissão do usuário com ID [%s] porque o usuário não existe.',

	'PageNotFoundException' => 'A página que você está tentando acessar não existe ou você não tem permissão para visualizá-la.',
	'EntityNotFoundException' => 'O conteúdo que você tentou acessar foi removido ou você não tem permissão para acessá-lo.',
	'EntityPermissionsException' => 'Você não tem permissão suficiente para realizar esta ação.',
	'GatekeeperException' => 'Você não tem permissão para visualizar a página que está tentando acessar.',
	'RegistrationAllowedGatekeeperException:invalid_invitecode' => 'O código de convite fornecido não é válido.',
	'BadRequestException' => 'Requisição inválida.',
	'BadRequestException:invalid_host_header' => 'A requisição contém um cabeçalho HOST inválido.',
	'BadRequestException:livesearch:no_query' => 'A busca ao vivo requer uma consulta.',
	'ValidationException' => 'Os dados enviados não atenderam aos requisitos. Por favor, verifique suas informações.',
	'LogicException:InterfaceNotImplemented' => '%s deve implementar %s',
	
	'Security:InvalidPasswordCharacterRequirementsException' => "A senha fornecida não atende aos requisitos de caracteres",
	'Security:InvalidPasswordLengthException' => "A senha fornecida não atende ao comprimento mínimo de %s caracteres",
	
	'Entity:Subscriptions:InvalidMethodsException' => '%s requer que $methods seja uma string ou um array de strings',

	'changebookmark' => 'Altere o atalho/favorito que você salvou para esta página',
	'error:missing_data' => 'Faltaram alguns dados na sua solicitação',
	'save:fail' => 'Ocorreu uma falha ao salvar os seus dados',
	'save:success' => 'Seus dados foram salvos com sucesso!',

	'error:default:title' => 'Oops...',
	'error:default:content' => 'Ops... algo deu errado.',
	'error:400:title' => 'Requisição Inválida',
	'error:400:content' => 'Desculpe. A solicitação é inválida ou está incompleta.',
	'error:401:title' => 'Não Autorizado',
	'error:403:title' => 'Acesso Proibido',
	'error:403:content' => 'Desculpe. Você não tem permissão para acessar a página solicitada.',
	'error:404:title' => 'Página não encontrada',
	'error:404:content' => 'Desculpe. Não foi possível encontrar a página que você solicitou.',
	'error:407:title' => 'Autenticação de Proxy Requerida',
	'error:500:title' => 'Erro Interno do Servidor',
	'error:503:title' => 'Serviço Indisponível',

	'upload:error:ini_size' => 'O arquivo que você tentou enviar é muito grande.',
	'upload:error:form_size' => 'O arquivo que você tentou enviar é muito grande.',
	'upload:error:partial' => 'O envio do arquivo não foi concluído.',
	'upload:error:no_file' => 'Nenhum arquivo foi selecionado.',
	'upload:error:no_tmp_dir' => 'Não foi possível salvar o arquivo enviado.',
	'upload:error:cant_write' => 'Não foi possível salvar o arquivo enviado.',
	'upload:error:extension' => 'Não foi possível salvar o arquivo enviado.',
	'upload:error:unknown' => 'O envio do arquivo falhou.',

/**
 * Table columns / Colunas da Tabela
 */
	'table_columns:fromView:admin' => 'Administrador',
	'table_columns:fromView:banned' => 'Banido',
	'table_columns:fromView:checkbox' => 'Selecionar',
	'table_columns:fromView:container' => 'Contêiner',
	'table_columns:fromView:entity_menu' => 'Menu',
	'table_columns:fromView:excerpt' => 'Descrição',
	'table_columns:fromView:link' => 'Nome/Título',
	'table_columns:fromView:icon' => 'Ícone',
	'table_columns:fromView:item' => 'Item',
	'table_columns:fromView:language' => 'Idioma',
	'table_columns:fromView:last_action' => 'Última Ação',
	'table_columns:fromView:last_login' => 'Último Login',
	'table_columns:fromView:owner' => 'Proprietário',
	'table_columns:fromView:prev_last_login' => 'Último Login anterior',
	'table_columns:fromView:time_created' => 'Data de Criação',
	'table_columns:fromView:time_updated' => 'Data de Atualização',
	'table_columns:fromView:unvalidated_menu' => 'Menu',
	'table_columns:fromView:user' => 'Usuário',


	'table_columns:fromProperty:description' => 'Descrição',
	'table_columns:fromProperty:email' => 'Email',
	'table_columns:fromProperty:name' => 'Nome',
	'table_columns:fromProperty:type' => 'Tipo',
	'table_columns:fromProperty:username' => 'Nome de Usuário',
	'table_columns:fromProperty:validated' => 'Validado',


	'table_columns:fromMethod:getSubtype' => 'Subtipo',
	'table_columns:fromMethod:getDisplayName' => 'Nome/Título',
	'table_columns:fromMethod:getMimeType' => 'Tipo de MIME',
	'table_columns:fromMethod:getSimpleType' => 'Tipo',


/**
 * User details / Detalhes do Usuário
 */

	'name' => "Nome de Exibição",
	'email' => "E-mail",
	'username' => "Usuário",
	'loginusername' => "Usuário ou E-mail",
	'password' => "Senha",
	'passwordagain' => "Senha (novamente para verificação)",
	'admin_option' => "Tornar este usuário admin?",
	'autogen_password_option' => "Gerar uma senha segura automaticamente?",

/**
 * Access / Acesso
 */

	'access:label:private' => "Privado",
	'access:label:logged_in' => "Somente Usuários Conectados",
	'access:label:public' => "Público",
	'access:label:logged_out' => "Usuários Desconectados",
	'access:label:friends' => "Amigos",
	'access' => "Quem pode ver isto?",
	'access:limited:label' => "Limitado",
	'access:help' => "Nível de Acesso",
	'access:read' => "Permissão de Leitura",
	'access:write' => "Permissão de Escrita",
	'access:admin_only' => "Somente Administradores",
	
/**
 * Dashboard and widgets / Painel de Controle e Widgets
 */

	'dashboard' => "Painel de Controle",
	'dashboard:nowidgets' => "Seu Painel de Controle permite que você acompanhe as atividades e conteúdos neste site que são importantes para você.",

	'widgets:add' => 'Adicionar Widgets',
	'widgets:add:description' => "Clique em qualquer botão de Widget abaixo para adicioná-lo à página.",
	'widget:unavailable' => 'Você já adicionou este Widget.',
	'widget:numbertodisplay' => 'Número de itens a Exibir',

	'widget:delete' => 'Remover %s',
	'widget:edit' => 'Personalizar este Widget',

	'item:object:widget' => "Widget",
	'collection:object:widget' => 'Widgets',
	'widgets:add:success' => "O Widget foi adicionado com sucesso.",
	'widgets:add:failure' => "Não foi possível adicionar seu Widget.",
	'widgets:move:failure' => "Não foi possível salvar a nova posição do Widget.",
	'widgets:remove:failure' => "Não foi possível remover este Widget.",
	'widgets:not_configured' => "Este Widget ainda não está configurado.",
	
/**
 * Groups / Grupos
 */

	'group' => "Grupo",
	'item:group' => "Grupo",
	'collection:group' => 'Grupos',
	'item:group:group' => "Grupo",
	'collection:group:group' => 'Grupos',
	'groups:tool_gatekeeper' => "A funcionalidade solicitada não está habilitada neste Grupo no momento.",

/**
 * Users / Usuários
 */

	'user' => "Usuário",
	'item:user' => "Usuário",
	'collection:user' => 'Usuários',
	'item:user:user' => 'Usuário',
	'collection:user:user' => 'Usuários',
	'notification:user:user:make_admin' => "Enviar uma Notificação quando um Usuário receber direitos de Administrador",
	'notification:user:user:remove_admin' => "Enviar uma Notificação quando os direitos de Administrador de um Usuário forem revogados",
	'notification:user:user:unban' => "Enviar uma Notificação quando um Usuário for liberado do banimento",


	'friends' => "Amigos",
	'collection:friends' => 'Amigos\' %s',

	'avatar' => 'Avatar',
	'avatar:edit' => 'Editar Avatar',
	'avatar:upload:instructions' => "Seu Avatar é exibido em todo o site. Você pode alterá-lo sempre que quiser. (Formatos aceitos: GIF, JPG ou PNG)",
	'avatar:upload:success' => 'Avatar enviado com sucesso!',
	'avatar:upload:fail' => 'Falha ao enviar o Avatar',
	'avatar:resize:fail' => 'Falha ao redimensionar o Avatar',
	'avatar:remove:success' => 'Avatar removido com sucesso',
	'avatar:remove:fail' => 'Falha ao remover o Avatar',

	'header:remove:success' => 'Cabeçalho removido com sucesso',
	'header:remove:fail' => 'Falha ao remover o cabeçalho',
	'header:upload:success' => 'Cabeçalho enviado com sucesso',
	'header:upload:fail' => 'Falha ao enviar o cabeçalho',

	'action:user:validate:already' => "%s já foi validado",
	'action:user:validate:success' => "%s foi validado",
	'action:user:validate:error' => "Ocorreu um erro ao validar %s",
	
	'action:user:login_as' => "Acessar como",
	'action:user:logout_as' => "Voltar para %s",

	'action:user:login_as:success' => "Você está agora conectado como %s",
	'action:user:login_as:unknown' => "Usuário Desconhecido. Não foi possível acessar.",
	'action:user:login_as:error' => "Não foi possível acessar como %s",

	'action:admin:user:bulk:ban' => "Foram banidos com sucesso %s usuários",
	'action:admin:user:bulk:unban' => "Foram liberados do banimento %s usuários",


/**
 * Feeds / Fontes
 */
	'feed:rss' => 'RSS',
	'feed:rss:title' => 'Feed RSS desta página',
/**
 * Links
 */
	'link:view' => 'ver link',
	'link:view:all' => 'Ver tudo',


/**
 * River / Atividades
 */
	'river' => "Atividades",
	'river:user:friend' => "%s agora é amigo de %s",
	'river:site:site:join' => "%s entrou no Site",
	'river:update:user:avatar' => '%s tem um novo Avatar',
	'river:posted:generic' => '%s publicou',
	'river:ingroup' => 'no Grupo %s',
	'river:none' => 'Sem Atividade',
	'river:update' => 'Atualização para %s',
	'river:delete' => 'Remover este item de Atividade',
	'river:delete:success' => 'Item de Atividade removido com sucesso!',
	'river:delete:fail' => 'Não foi possível remover o item de Atividade',
	'river:delete:lack_permission' => 'Você não tem permissão para remover este item de Atividade',
	'river:subject:invalid_subject' => 'Usuário Inválido',

	'activity:owner' => 'Atitivades',

/**
 * Relationships / Relacionamentos
 */
	
	'relationship:default' => "%s relacionado a %s",

/**
 * Notifications / Notificações
 */
	'notification:method:email' => 'E-mail',
	'notification:method:email:from' => '%s (via %s)',
	'notification:method:delayed_email' => 'E-mail Programado',
	
	'usersettings:notifications:title' => "Configurações de Notificações",
	'usersettings:notifications:users:title' => "Notificações por Usuário",
	'usersettings:notifications:users:description' => "Para receber notificações dos seus amigos (individualmente) quando eles criarem novos conteúdos, encontre-os abaixo e escolha o método de notificação que deseja usar.",
	
	'usersettings:notifications:menu:page' => "Configurações de Notificações",
	'usersettings:notifications:menu:filter:settings' => "Configurações",
	
	'usersettings:notifications:default:description' => 'Configurações padrão de notificações para eventos do sistema',
	'usersettings:notifications:content_create:description' => 'Configurações padrão de notificações para conteúdos que você criou. Pode gerar notificações quando outras pessoas interagirem no seu conteúdo, como ao deixar um comentário',
	'usersettings:notifications:create_comment:description' => 'Configuração padrão para notificações quando você comenta em um conteúdo, para acompanhar o restante da conversa',
	'usersettings:notifications:mentions:description' => 'Receber notificações quando você for mencionado com @',
	'usersettings:notifications:admin_validation_notification:description' => 'Receber uma notificação quando um novo usuário registrado precisar ser aprovado',

	'usersettings:notifications:timed_muting' => "Desativar notificações temporariamente",
	'usersettings:notifications:timed_muting:help' => "Se você não quiser receber notificações durante um período (por exemplo, férias), pode definir uma data de início e fim para desativar todas as notificações temporariamente.",
	'usersettings:notifications:timed_muting:start' => "Primeiro dia",
	'usersettings:notifications:timed_muting:end' => "Último dia",
	'usersettings:notifications:timed_muting:warning' => "Suas notificações estão temporariamente desativadas",
	
	'usersettings:notifications:save:ok' => "As configurações de notificações foram salvas com sucesso.",
	'usersettings:notifications:save:fail' => "Ocorreu um problema ao salvar as configurações de notificações.",
	
	'usersettings:notifications:subscriptions:save:ok' => "As inscrições para notificações foram salvas com sucesso.",
	'usersettings:notifications:subscriptions:save:fail' => "Ocorreu um problema ao salvar as inscrições para notificações.",

	'notification:default:salutation' => 'Prezado(a) %s,',
	'notification:default:sign-off' => 'Saudações,

%s',
	'notification:subject' => 'Notificação sobre %s',
	'notification:body' => 'Veja a nova atividade em %s',
	
	'notification:mentions:subject' => '%s mencionou você',
	'notification:mentions:body' => "%s mencionou você em '%s''.

Para ver a postagem completa, clique no link abaixo:
%s",
	
	'notifications:delayed_email:subject:daily' => "Notificações Diárias",
	'notifications:delayed_email:subject:weekly' => "Notificações Semanais",
	'notifications:delayed_email:body:intro' => "Abaixo está a lista das suas notificações atrasadas.",
	
	'notifications:subscriptions:record:settings' => 'Mostrar seleção detalhada',
	'notifications:subscriptions:no_results' => 'Ainda não existem registros de assinaturas',
	'notifications:subscriptions:details:no_results' => 'Não há assinaturas detalhadas para configurar.',
	'notifications:subscriptions:details:reset' => 'Desfazer seleção',

	'notifications:mute:title' => "Silenciar Notificações",
	'notifications:mute:description' => "Se você não deseja mais receber notificações como esta, configure um ou mais dos motivos abaixo para bloquear todas as notificações:",
	'notifications:mute:error:content' => "Nenhuma configuração de notificação pôde ser determinada",
	'notifications:mute:entity' => "sobre '%s'",
	'notifications:mute:container' => "de '%s'",
	'notifications:mute:owner' => "por '%s'",
	'notifications:mute:actor' => "iniciado por '%s'",
	'notifications:mute:group' => "escrito no grupo '%s'",
	'notifications:mute:user' => "escrito pelo usuário '%s'",

	'notifications:mute:save:success' => "Suas configurações de notificação foram salvas",

	'notifications:mute:email:footer' => "Silenciar esses e-mails",


/**
 * Search / Pesquisar
 */

	'search' => "Pesquisar",
	'notfound' => "Nenhum resultado encontrado.",

	'viewtype:change' => "Alterar Tipo de Lista",
	'viewtype:list' => "Modo Lista",
	'viewtype:gallery' => "Galeria",
	'search:go' => 'Vai!',
	'userpicker:only_friends' => 'Apenas os Amigos',

/**
 * Account / Conta
 */

	'account' => "Minha Conta",
	'settings' => "Configurações",
	'tools' => "Ferramentas",
	'settings:edit' => 'Editar as Configurações',

	'register' => "Cadastrar Novo Usuário",
	'registerok' => "Você se registrou com sucesso em %s.",
	'registerbad' => "Seu registro não foi realizado devido a um erro desconhecido.",
	'registerdisabled' => "O registro foi desativado pelo Administrador do Sistema.",
	'register:fields' => "Todos os campos são obrigatórios.",

	'registration:noname' => 'O nome de exibição é obrigatório.',
	'registration:notemail' => 'O endereço de e-mail fornecido não parece ser um endereço de e-mail válido.',
	'registration:userexists' => 'Esse Nome de Usuário já existe.',
	'registration:usernametooshort' => 'Seu Nome de Usuário deve ter no mínimo %u caracteres.',
	'registration:usernametoolong' => 'Seu Nome de Usuário é muito longo. Ele pode ter no máximo %u caracteres.',
	'registration:dupeemail' => 'Este endereço de e-mail já foi registrado.',
	'registration:invalidchars' => 'Desculpe, seu Nome de Usuário contém o caractere %s, que é inválido. Os seguintes caracteres são inválidos: %s',
	'registration:invalidchars:route' => 'Desculpe, seu Nome de Usuário contém o caractere %s, que é inválido.',
	'registration:emailnotvalid' => 'Desculpe, o endereço de e-mail que você digitou é inválido neste sistema.',
	'registration:passwordnotvalid' => 'Desculpe, a senha que você digitou é inválida neste sistema.',
	'registration:usernamenotvalid' => 'Desculpe, o Nome de Usuário que você digitou é inválido neste sistema.',

	'adduser:ok' => "Você adicionou um novo Usuário com sucesso.",
	
	'user:set:name' => "Configurações do Nome da Conta",
	'user:name:label' => "Nome de Exibição",
	'user:name:success' => "Nome de Exibição alterado com sucesso no Sistema.",
	'user:name:fail' => "Não foi possível alterar o Nome de Exibição no Sistema.",
	'user:username:success' => "Nome de Usuário alterado com sucesso no Sistema.",
	'user:username:fail' => "Não foi possível alterar o Nome de Usuário no Sistema.",

	'user:set:password' => "Senha da Conta",
	'user:current_password:label' => 'Senha Atual',
	'user:password:label' => "Nova Senha",
	'user:password2:label' => "Repita a Nova Senha",
	'user:password:success' => "Senha Alterada",
	'user:changepassword:unknown_user' => 'Usuário Inválido.',
	'user:changepassword:change_password_confirm' => 'Isso irá alterar sua senha.',

	'user:delete:title' => 'Confirmar Exclusão da Conta',
	'user:delete:description' => 'Por favor, confirme que deseja excluir a conta de %s. Excluir a conta também eliminará todo o conteúdo (incluindo grupos) pertencente a este usuário. Isso pode incluir conteúdo relacionado, como conteúdo de grupos, subpáginas ou comentários sobre o conteúdo. Abaixo você pode ver uma Lista do Conteúdo pertencente ao Usuário.',
	'user:delete:confirm' => "Confirmo que desejo Excluir este Usuário",

	'user:set:language' => "Configurações do Idioma",
	'user:language:label' => "Idioma",
	'user:language:success' => "As Configurações de Idioma foram atualizadas.",

	'user:username:notfound' => 'Nome de Usuário %s não encontrado.',
	'user:username:help' => 'Por favor, esteja ciente de que alterar o Nome de Usuário mudará todos os links dinâmicos relacionados ao Usuário.',

	'user:password:lost' => 'Recuperar Minha Senha!',
	'user:password:hash_missing' => 'Lamentamos, mas pedimos que você redefina a sua senha. Melhoramos a segurança das senhas no Site, mas não foi possível migrar todas as contas durante o processo.',
	'user:password:changereq:success' => 'Nova Senha solicitada com sucesso, e-mail enviado!',

	'user:password:text' => 'Para solicitar uma nova senha, insira seu Nome de Usuário ou Endereço de E-mail abaixo e clique no botão Solicitar.',

	'user:persistent' => 'Permanecer Conectado',

	'walled_garden:home' => 'Inicial',

/**
 * Password requirements / Requisitos de Senha
 */
	'password:requirements:min_length' => "A senha deve ter pelo menos %s caracteres.",
	'password:requirements:lower' => "A senha deve conter pelo menos %s letra(s) minúscula(s).",
	'password:requirements:no_lower' => "A senha não deve conter letras minúsculas.",
	'password:requirements:upper' => "A senha deve conter pelo menos %s letra(s) maiúscula(s).",
	'password:requirements:no_upper' => "A senha não deve conter letras maiúsculas.",
	'password:requirements:number' => "A senha deve conter pelo menos %s número(s).",
	'password:requirements:no_number' => "A senha não deve conter números.",
	'password:requirements:special' => "A senha deve conter pelo menos %s caractere(s) especial(is).",
	'password:requirements:no_special' => "A senha não deve conter caracteres especiais.",

	
/**
 * Administration / Administração
 */
	'menu:page:header:administer' => 'Administrar',
	'menu:page:header:configure' => 'Configurar',
	'menu:page:header:utilities' => 'Utilitários',
	'menu:page:header:develop' => 'Desenvolvedor',
	'menu:page:header:information' => 'Informações',
	'menu:page:header:default' => 'Outras Opções',
	'menu:page:header:plugin_settings' => 'Configurações dos Plugins',

	'admin:view_site' => 'Ver Site',
	'admin:loggedin' => 'Conectado como %s',
	'admin:menu' => 'Menu',

	'admin:configuration:success' => "As suas Configurações foram Salvas!",
	'admin:configuration:fail' => "Não foi possível Salvar as suas Configurações.",
	'admin:configuration:dataroot:relative_path' => 'Não é possível definir "%s" como o diretório de dados porque ele não é um caminho absoluto.',
	'admin:configuration:default_limit' => 'O número de itens por página deve ser pelo menos 1.',


	'admin:unknown_section' => 'Seção de Administração Inválida.',

	'admin' => "Administração",
	'admin:header:release' => "Versão do Elgg: %s",
	'admin:description' => "O Painel de Administração permite que você controle todos os aspectos do Sistema, desde o Gerenciamento de Usuários até o comportamento dos Plugins. Escolha uma opção abaixo para começar.",


	'admin:performance' => 'Performance',
	'admin:performance:label:generic' => 'Genérico',
	'admin:performance:generic:description' => 'Abaixo está uma lista de sugestões/valores de performance que podem ajudar a otimizar o Site',
	'admin:performance:simplecache' => 'Simplecache',
	'admin:performance:simplecache:settings:warning' => "Recomenda-se configurar o simplecache no arquivo settings.php.
Configurar o simplecache no settings.php melhora o desempenho do Cache.
Isso permite que o Elgg pule a conexão com o Banco de Dados ao servir arquivos JavaScript e CSS em Cache.",
	'admin:performance:systemcache' => 'Systemcache',
	'admin:performance:apache:mod_cache' => 'Apache mod_cache',
	'admin:performance:apache:mod_cache:warning' => 'O módulo mod_cache fornece esquemas de Cache conscientes do HTTP. Isso significa que os arquivos serão armazenados conforme uma instrução que especifica por quanto tempo uma página pode ser considerada "fresca".',
	'admin:performance:php:open_basedir' => 'PHP open_basedir',
	'admin:performance:php:open_basedir:not_configured' => 'Nenhuma limitação foi definida',
	'admin:performance:php:open_basedir:warning' => 'Uma pequena quantidade de limitações open_basedir está em vigor, isso pode impactar a performance.',
	'admin:performance:php:open_basedir:error' => 'Uma grande quantidade de limitações open_basedir está em vigor, isso provavelmente impactará a performance.',
	'admin:performance:php:open_basedir:generic' => 'Com open_basedir, cada acesso a arquivo será verificado contra a lista de limitações.
Como o Elgg acessa muitos arquivos, isso impacta negativamente a performance. Além disso, o opcache do PHP não pode mais armazenar caminhos de arquivos em memória e precisa resolver isso a cada acesso.',
	
	'admin:statistics' => 'Estatísticas',
	'admin:server' => 'Servidor',
	'admin:cron' => 'Cron',
	'admin:cron:record' => 'Últimas Tarefas do Cron',
	'admin:cron:period' => 'Período do Cron',
	'admin:cron:friendly' => 'Última execução concluída',
	'admin:cron:date' => 'Data e Hora',
	'admin:cron:msg' => 'Mensagem',
	'admin:cron:started' => 'Tarefas Cron para "%s" iniciadas em %s',
	'admin:cron:started:actual' => 'Intervalo do Cron "%s" iniciou processamento em %s',
	'admin:cron:complete' => 'Tarefas Cron para "%s" concluídas em %s',

	'admin:appearance' => 'Aparência',
	'admin:administer_utilities' => 'Utilitários',
	'admin:develop_utilities' => 'Utilitários',
	'admin:configure_utilities' => 'Utilitários',
	'admin:configure_utilities:robots' => 'Robots.txt',

	'admin:users' => "Usuários",
	'admin:users:online' => 'Usuários Online',
	'admin:users:newest' => 'Recentes',
	'admin:users:admins' => 'Administradores',
	'admin:users:banned' => 'Banidos',
	'admin:users:searchuser' => 'Buscar Usuário para torná-lo Administrador',
	'admin:users:existingadmins' => 'Lista de Administradores existentes',
	'admin:users:add' => 'Adicionar Novo Usuário',
	'admin:users:description' => "Este Painel de Administração permite controlar as configurações dos Usuários do Site. Escolha uma opção abaixo para começar.",
	'admin:users:adduser:label' => "Clique aqui para Adicionar um Novo Usuário...",
	'admin:users:opt:linktext' => "Configurar Usuários...",
	'admin:users:opt:description' => "Configure usuários e informações da conta.",
	'admin:users:find' => 'Buscar',
	'admin:users:unvalidated' => 'Não validados',
	'admin:users:unvalidated:no_results' => 'Nenhum usuário não validado foi encontrado.',
	'admin:users:unvalidated:registered' => 'Registrado: %s',
	'admin:users:unvalidated:change_email' => 'Alterar endereço de e-mail',
	'admin:users:unvalidated:change_email:user' => 'Alterar endereço de e-mail de: %s',
	'admin:users:inactive' => 'Inativos',
	'admin:users:inactive:last_login_before' => "Mostrar usuários que **não fizeram login depois de**",
	'admin:users:inactive:last_login_before:help' => "Isso também mostrará Usuários que nunca fizeram login.",
	'admin:users:details:attributes' => 'Atributos do Usuário',
	'admin:users:details:profile' => 'Informações do Perfil',
	'admin:users:details:profile:no_fields' => 'Nenhum campo de Perfil configurado',
	'admin:users:details:profile:no_information' => 'Nenhuma informação de Perfil disponível',
	'admin:users:details:statistics' => 'Estatísticas de Conteúdo',
	
	'admin:configure_utilities:maintenance' => 'Modo de Manutenção',
	'admin:upgrades' => 'Atualizações',
	'admin:upgrades:finished' => 'Concluído',
	'admin:upgrades:db' => 'Atualizações do Banco de Dados',
	'admin:upgrades:db:name' => 'Nome da Atualização',
	'admin:upgrades:db:start_time' => 'Hora de início',
	'admin:upgrades:db:end_time' => 'Hora de término',
	'admin:upgrades:db:duration' => 'Duração',
	'admin:upgrades:menu:pending' => 'Atualizações Pendentes',
	'admin:upgrades:menu:completed' => 'Atualizações Concluídas',
	'admin:upgrades:menu:db' => 'Atualizações do Banco de Dados',
	'admin:upgrades:menu:run_single' => 'Executar esta Atualização',
	'admin:upgrades:run' => 'Executar Atualizações agora',
	'admin:upgrades:error:invalid_upgrade' => 'A entidade %s não existe ou não é uma instância válida de ElggUpgrade',
	'admin:upgrades:error:invalid_batch' => 'O executor em lote para a atualização %s (%s) não pôde ser instanciado',
	'admin:upgrades:completed' => 'Atualização "%s" concluída em %s',
	'admin:upgrades:completed:errors' => 'Atualização "%s" concluída em %s, mas encontrou %s erros',
	'admin:upgrades:failed' => 'Atualização "%s" falhou',
	'admin:action:upgrade:reset:success' => 'Atualização "%s" foi reiniciada',

	'admin:settings' => 'Configurações',
	'admin:settings:basic' => 'Configurações Básicas',
	'admin:settings:i18n' => 'Internacionalização',
	'admin:settings:advanced' => 'Configurações Avançadas',
	'admin:settings:users' => 'Usuários',
	'admin:site_icons' => 'Ícones do Site',
	'admin:site_icons:site_icon' => 'Ícone do Site',
	'admin:site_icons:info' => 'Envie um ícone relacionado ao seu site. Este ícone será usado como favicon e também aparecerá, por exemplo, como remetente nas notificações do site.',
	'admin:site_icons:font_awesome' => 'Font Awesome',
	'admin:site_icons:font_awesome:zip' => 'Enviar arquivo ZIP',
	'admin:site_icons:font_awesome:zip:help' => 'Aqui você pode enviar um download do Font Awesome obtido em https://fontawesome.com/download. Esta fonte web será servida localmente.',
	'admin:site_icons:font_awesome:zip:error' => 'O arquivo ZIP enviado não pode ser extraído',
	'admin:site_icons:font_awesome:remove_zip' => 'Remover fonte enviada',
	'admin:theme' => 'Tema',
	'admin:theme:info' => 'Variáveis diversas do tema podem ser configuradas neste formulário. Esta configuração substituirá as configurações existentes.',
	'admin:theme:warning' => 'Aviso: essas alterações podem afetar o estilo do seu site.',
	'admin:theme:css_variable:name' => 'Variável CSS',
	'admin:theme:css_variable:value' => 'Valor',
	'admin:site_settings' => 'Configurações do Site',
	'admin:site:description' => 'Este painel de administração permite controlar as configurações globais do seu site. Escolha uma opção abaixo para começar.',
	'admin:site:opt:linktext' => 'Configurar Site...',
	'admin:settings:in_settings_file' => 'Esta configuração está definida no arquivo settings.php',

	'site_secret:current_strength' => 'Força da Chave',
	'site_secret:strength:weak' => 'Fraca',
	'site_secret:strength_msg:weak' => 'Recomendamos fortemente que você regenere o segredo do site.',
	'site_secret:strength:moderate' => 'Moderada',
	'site_secret:strength_msg:moderate' => 'Recomendamos que você regenere o segredo do site para maior segurança.',
	'site_secret:strength:strong' => 'Forte',
	'site_secret:strength_msg:strong' => 'O segredo do seu site é suficientemente forte. Não há necessidade de regenerá-lo.',


	'admin:dashboard' => 'Painel de Controle',
	'admin:widget:online_users' => 'Usuários Online',
	'admin:widget:online_users:help' => 'Lista os Usuários Online no Site',
	'admin:widget:new_users' => 'Novos Usuários',
	'admin:widget:new_users:help' => 'Lista os Usuários Mais Recentes',
	'admin:widget:banned_users' => 'Usuários Banidos',
	'admin:widget:banned_users:help' => 'Lista os Usuários Banidos',
	'admin:widget:content_stats' => 'Estatísticas de Conteúdo',
	'admin:widget:content_stats:help' => 'Acompanhe o Conteúdo criado pelos seus Usuários',
	'admin:widget:cron_status' => 'Status do Cron',
	'admin:widget:cron_status:help' => 'Mostra o status da última execução dos trabalhos Cron',
	'admin:widget:elgg_blog' => 'Blog do Elgg',
	'admin:widget:elgg_blog:help' => 'Exibe as últimas publicações do blog do Elgg',
	'admin:widget:elgg_blog:no_results' => 'Não foi possível obter as últimas notícias do Elgg',
	'admin:statistics:numentities' => 'Estatísticas de Conteúdo',
	'admin:statistics:numentities:type' => 'Tipo de Conteúdo',
	'admin:statistics:numentities:number' => 'Quantidade',
	'admin:statistics:numentities:searchable' => 'Entidades Pesquisáveis',
	'admin:statistics:numentities:other' => 'Outras Entidades',

	'admin:statistics:database' => 'Informações do Banco de Dados',
	'admin:statistics:database:table' => 'Tabela',
	'admin:statistics:database:row_count' => 'Total de Linhas',


	'admin:statistics:queue' => 'Informações da Fila',
	'admin:statistics:queue:name' => 'Nome',
	'admin:statistics:queue:row_count' => 'Total de Linhas',
	'admin:statistics:queue:oldest' => 'Registro mais Antigo',
	'admin:statistics:queue:newest' => 'Registro mais Recente',

	'admin:widget:admin_welcome' => 'Bem-vindo',
	'admin:widget:admin_welcome:help' => "Uma breve introdução à área Administrativa do Elgg",
	'admin:widget:admin_welcome:intro' => 'Bem-vindo ao Elgg! Neste momento, você está visualizando o Painel de Administração. Ele é útil para acompanhar o que está acontecendo no Site.',

	'admin:widget:admin_welcome:registration' => "O cadastro de novos usuários está desativado no momento! Você pode ativá-lo na página %s.",
	'admin:widget:admin_welcome:admin_overview' => "A navegação da área administrativa é feita pelo menu à direita. Ele está organizado em três seções:
	<dl>
		<dt>Administrar</dt><dd>Tarefas básicas como gerenciar usuários, monitorar conteúdo denunciado e ativar plugins.</dd>
		<dt>Configurar</dt><dd>Tarefas ocasionais, como definir o Nome do Site ou Configurar as Preferências de Segurança.</dd>
		<dt>Utilitários</dt><dd>Diversas ferramentas para auxiliar na manutenção do site.</dd>
		<dt>Informações</dt><dd>Informações sobre o Site, como Estatísticas.</dd>
		<dt>Desenvolvedor</dt><dd>Para Desenvolvedores que estão criando plugins ou fazendo a depuração do Site. (Requer Plugin para Desenvolvedores.)</dd>
	</dl>",

	// argh, this is ugly / Aff, isso tá horrível!
	'admin:widget:admin_welcome:outro' => '<br />Não deixe de conferir os recursos disponíveis nos links do rodapé. Obrigado por usar o Elgg!',

	'admin:widget:control_panel' => 'Painel de controle',
	'admin:widget:control_panel:help' => 'Fornece acesso fácil aos controles mais usados',

	'admin:cache:flush' => 'Esvaziar os Caches',
	'admin:cache:flushed' => 'Os Caches do Site foram esvaziados',
	'admin:cache:invalidate' => 'Invalidar os Caches',
	'admin:cache:invalidated' => 'Os Caches do Site foram invalidados',
	'admin:cache:clear' => 'Limpar os Caches',
	'admin:cache:cleared' => 'Os Caches do Site foram limpos',
	'admin:cache:purge' => 'Eliminar os Caches',
	'admin:cache:purged' => 'Os Caches do Site foram eliminados',

	'admin:footer:faq' => 'Perguntas Frequentes sobre Administração',
	'admin:footer:manual' => 'Manual do Administrador',
	'admin:footer:community_forums' => 'Fóruns da Comunidade Elgg',
	'admin:footer:blog' => 'Blog do Elgg',

	'admin:plugins:category:all' => 'Todos os Plugins',
	'admin:plugins:category:active' => 'Plugins Ativados',
	'admin:plugins:category:inactive' => 'Plugins Desativados',
	'admin:plugins:category:admin' => 'Admin',
	'admin:plugins:category:bundled' => 'Pacotes Inclusos',
	'admin:plugins:category:nonbundled' => 'Pacotes Externos',
	'admin:plugins:category:content' => 'Conteúdo',
	'admin:plugins:category:development' => 'Desenvolvedor',
	'admin:plugins:category:enhancement' => 'Aprimoramentos',
	'admin:plugins:category:api' => 'Serviços/API',
	'admin:plugins:category:communication' => 'Comunicação',
	'admin:plugins:category:security' => 'Segurança e Spam',
	'admin:plugins:category:social' => 'Social',
	'admin:plugins:category:multimedia' => 'Multimídia',
	'admin:plugins:category:theme' => 'Temas',
	'admin:plugins:category:widget' => 'Widgets',
	'admin:plugins:category:utility' => 'Utilitários',


	'admin:plugins:markdown:unknown_plugin' => 'Plugin Desconhecido.',
	'admin:plugins:markdown:unknown_file' => 'Arquivo Desconhecido.',


	'admin:notices:delete_all' => 'Descartar Todos os Avisos %s',
	'admin:notices:could_not_delete' => 'Não foi Possível Excluir o Aviso.',
	'item:object:admin_notice' => 'Aviso Administrativo',
	'collection:object:admin_notice' => 'Avisos Administrativos',


	'admin:options' => 'Opções do Administrador',

	'admin:security' => 'Segurança',
	'admin:security:information' => 'Informações',
	'admin:security:information:description' => 'Nesta página você encontra uma lista de recomendações de segurança.',
	'admin:security:information:https' => 'O Site está protegido por HTTPS',
	'admin:security:information:https:warning' => 'Recomenda-se proteger seu Site usando HTTPS, isso ajuda a proteger dados (ex.: senhas) contra interceptação na conexão.',
	'admin:security:information:wwwroot' => 'A pasta principal do Site é gravável',
	'admin:security:information:wwwroot:error' => 'Recomenda-se instalar o Elgg em uma pasta que não seja gravável pelo servidor web. Visitantes mal-intencionados podem inserir códigos indesejados no seu Site.',
	'admin:security:information:validate_input' => 'Validação de Entrada',
	'admin:security:information:validate_input:error' => 'Algum plugin desativou a validação de entrada no seu site, permitindo que usuários enviem conteúdo potencialmente nocivo (ex.: cross-site scripting, etc).',
	'admin:security:information:password_length' => 'Tamanho mínimo da senha',
	'admin:security:information:password_length:warning' => 'Recomenda-se que o tamanho mínimo da senha seja de pelo menos 6 caracteres.',
	'admin:security:information:username_length' => 'Tamanho mínimo do nome de usuário',
	'admin:security:information:username_length:warning' => 'Recomenda-se que o tamanho mínimo do nome de usuário seja de pelo menos 4 caracteres.',
	'admin:security:information:php:session_gc' => 'Limpeza de sessões PHP',
	'admin:security:information:php:session_gc:chance' => 'Chance de limpeza: %s%%',
	'admin:security:information:php:session_gc:lifetime' => 'Tempo de vida da sessão: %s segundos',
	'admin:security:information:php:session_gc:error' => "Recomenda-se configurar 'session.gc_probability' e 'session.gc_divisor' nas configurações do PHP, para que sessões expiradas sejam removidas do banco de dados, evitando reutilização de sessões antigas.",
	'admin:security:information:htaccess:hardening' => 'Reforço de acesso no arquivo .htaccess',
	'admin:security:information:htaccess:hardening:help' => 'No arquivo .htaccess, o acesso a certos arquivos pode ser bloqueado para aumentar a segurança do seu Site. Para mais informações, consulte seu arquivo .htaccess.',

	
	'admin:security:settings' => 'Configurações',
	'admin:security:settings:description' => 'Nesta página você pode configurar algumas funcionalidades de segurança. Leia as configurações com atenção.',
	'admin:security:settings:label:hardening' => 'Reforço de Segurança',
	'admin:security:settings:label:account' => 'Minha Conta',
	'admin:security:settings:label:notifications' => 'Notificações',
	'admin:security:settings:label:site_secret' => 'Segredo do Site',

	
	'admin:security:settings:notify_admins' => 'Notificar todos os administradores do site quando um administrador for adicionado ou removido',
	'admin:security:settings:notify_admins:help' => 'Envia uma Notificação para todos os Administradores do Site sempre que um Administrador adicionar ou remover outro Administrador.',

	'admin:security:settings:notify_user_admin' => 'Notificar o Usuário quando a função de Administrador for adicionada ou removida',
	'admin:security:settings:notify_user_admin:help' => 'Envia uma Notificação para o Usuário informando que a função de Administrador foi adicionada ou removida da sua conta.',

	'admin:security:settings:notify_user_ban' => 'Notificar o Usuário quando a sua conta for Liberada',
	'admin:security:settings:notify_user_ban:help' => 'Envia uma Notificação para o Usuário informando que a sua conta foi Banida ou Liberada.',

	
	'admin:security:settings:notify_user_password' => 'Notificar o Usuário quando alterar a senha',
	'admin:security:settings:notify_user_password:help' => 'Isto enviará uma Notificação ao Usuário quando ele alterar a senha.',

	
	'admin:security:settings:protect_upgrade' => 'Proteger o upgrade.php',
	'admin:security:settings:protect_upgrade:help' => 'Isto protegerá o arquivo upgrade.php, exigindo um Token válido ou que você seja um Administrador para acessá-lo.',
	'admin:security:settings:protect_upgrade:token' => 'Para utilizar o upgrade.php estando desconectado ou sem ser um Administrador, a seguinte URL deve ser usada:',

	
	'admin:security:settings:protect_cron' => 'Proteger as URLs do /cron',
	'admin:security:settings:protect_cron:help' => 'Isto protegerá as URLs do /cron com um Token. Somente se um Token válido for fornecido, o Cron será executado.',
	'admin:security:settings:protect_cron:token' => 'Para utilizar as URLs do /cron, os seguintes Tokens devem ser usados. Observe que cada intervalo possui seu próprio Token.',
	'admin:security:settings:protect_cron:toggle' => 'Mostrar/ocultar URLs do Cron',

	
	'admin:security:settings:disable_password_autocomplete' => 'Desativar preenchimento automático em campos de senha',
	'admin:security:settings:disable_password_autocomplete:help' => 'Os dados inseridos nesses campos serão armazenados em cache pelo navegador. Um atacante que conseguir acessar o navegador da vítima poderia roubar essas informações. Isso é especialmente importante se o aplicativo for usado com frequência em computadores compartilhados, como em lan houses ou terminais de aeroportos. Se você desativar essa opção, ferramentas de gerenciamento de senhas não poderão mais preencher esses campos automaticamente. O suporte ao atributo autocomplete pode variar conforme o navegador.',

	
	'admin:security:settings:email_require_password' => 'Exigir senha para alterar o endereço de e-mail',
	'admin:security:settings:email_require_password:help' => 'Quando o usuário desejar alterar seu endereço de e-mail, exija que ele informe a senha atual.',

	
	'admin:security:settings:email_require_confirmation' => 'Exigir confirmação ao alterar o endereço de e-mail',
	'admin:security:settings:email_require_confirmation:help' => 'O novo endereço de e-mail precisa ser confirmado antes que a alteração tenha efeito. Após a alteração bem-sucedida, uma notificação é enviada para o endereço de e-mail antigo.',

	'admin:security:settings:session_bound_entity_icons' => 'Ícones de entidade vinculados à sessão',
	'admin:security:settings:session_bound_entity_icons:help' => 'Por padrão, os ícones de entidade podem ser vinculados à sessão. Isso significa que as URLs geradas também contêm informações sobre a sessão atual.
Ter ícones vinculados à sessão faz com que as URLs dos ícones não sejam compartilháveis entre sessões. O efeito colateral é que o cache dessas URLs beneficiará apenas a sessão ativa.',

	'admin:security:settings:subresource_integrity_enabled' => 'Integridade de subrecursos',
	'admin:security:settings:subresource_integrity_enabled:help' => 'Adiciona metadados de integridade a subrecursos como arquivos js e css. Isso permite que o navegador valide o conteúdo do recurso.',
	
	'admin:security:settings:site_secret:intro' => 'O Elgg usa uma Chave para criar Tokens de segurança para várias finalidades.',
	'admin:security:settings:site_secret:regenerate' => "Regenerar Segredo do Site",
	'admin:security:settings:site_secret:regenerate:help' => "Aviso: Regenerar o Segredo do Site pode causar transtornos para alguns usuários, invalidando Tokens usados em cookies de \"lembrar-me\", pedidos de validação por e-mail, códigos de convite etc.",
	
	'admin:security:settings:minusername' => "Comprimento mínimo do Nome de Usuário",
	'admin:security:settings:minusername:help' => "Número mínimo de caracteres exigidos no Nome de Usuário",
	
	'admin:security:settings:min_password_length' => "Comprimento mínimo da senha",
	'admin:security:settings:min_password_length:help' => "Número mínimo de caracteres exigidos em uma senha",
	
	'admin:security:settings:min_password_lower' => "Número mínimo de caracteres minúsculos em uma senha",
	'admin:security:settings:min_password_lower:help' => "Configure o número mínimo de caracteres minúsculos (a-z) que devem estar presentes em uma senha. Use 0 para não exigir nenhum, ou deixe vazio para não impor requisitos.",
	
	'admin:security:settings:min_password_upper' => "Número mínimo de caracteres maiúsculos em uma senha",
	'admin:security:settings:min_password_upper:help' => "Configure o número mínimo de caracteres maiúsculos (A-Z) que devem estar presentes em uma senha. Use 0 para não exigir nenhum, ou deixe vazio para não impor requisitos.",
	
	'admin:security:settings:min_password_number' => "Número mínimo de dígitos numéricos em uma senha",
	'admin:security:settings:min_password_number:help' => "Configure o número mínimo de caracteres numéricos (0-9) que devem estar presentes em uma senha. Use 0 para não exigir nenhum, ou deixe vazio para não impor requisitos.",
	
	'admin:security:settings:min_password_special' => "Número mínimo de caracteres especiais em uma senha",
	'admin:security:settings:min_password_special:help' => "Configure o número mínimo de caracteres especiais (!@$%^&*()<>,.?/[]{}-=_+) que devem estar presentes em uma senha. Use 0 para não exigir nenhum, ou deixe vazio para não impor requisitos.",
	
	'admin:security:security_txt' => "Security.txt",
	'admin:security:security_txt:description' => "Quando uma vulnerabilidade de segurança for encontrada em seu site, onde ela deve ser reportada? O security.txt é um padrão que ajuda a estruturar as informações que os pesquisadores de segurança precisam para poderem contatar os administradores do site sobre a vulnerabilidade encontrada. Mais informações sobre o padrão podem ser encontradas em %s. O conteúdo do seu security.txt pode ser encontrado em %s.",
	'admin:security:security_txt:expired' => "O conteúdo do seu security.txt está expirado, por favor verifique se todas as informações ainda estão atualizadas.",
	'admin:security:security_txt:contact' => "Contato",
	'admin:security:security_txt:contact:help' => "Um link ou endereço de e-mail para que as pessoas possam contatar você sobre questões de segurança. Lembre-se de incluir 'https://' para URLs e 'mailto:' para e-mails. Veja %s",

	'admin:security:security_txt:expires' => "Expira",
	'admin:security:security_txt:expires:help' => "A data e hora em que o conteúdo do arquivo security.txt deve ser considerado desatualizado (para que pesquisadores de segurança não o confiem mais). Certifique-se de atualizar esse valor periodicamente e revisar seu arquivo. Veja %s",
	'admin:security:security_txt:encryption' => "Criptografia",
	'admin:security:security_txt:encryption:help' => "Um link para uma chave que pesquisadores de segurança devem usar para se comunicar com segurança com você. Lembre-se de incluir 'https://'. Veja %s",
	'admin:security:security_txt:acknowledgments' => "Agradecimentos",
	'admin:security:security_txt:acknowledgments:help' => "Um link para uma página web onde você agradece aos pesquisadores de segurança que ajudaram você. Lembre-se de incluir 'https://'. Veja %s",
	'admin:security:security_txt:language' => "Idioma",
	'admin:security:security_txt:language:help' => "Uma lista separada por vírgulas dos códigos dos idiomas que sua equipe de segurança fala. Você pode incluir mais de um idioma. Veja %s",
	'admin:security:security_txt:canonical' => "Canônico",
	'admin:security:security_txt:canonical:help' => "As URLs para acessar seu arquivo security.txt. É importante incluir isso se você estiver assinando digitalmente o arquivo security.txt, para que a localização do arquivo também possa ser assinada digitalmente. Veja %s",
	'admin:security:security_txt:policy' => "Política",
	'admin:security:security_txt:policy:help' => "Um link para uma política detalhando o que pesquisadores de segurança devem fazer ao procurar ou relatar problemas de segurança. Lembre-se de incluir 'https://'. Veja %s",
	'admin:security:security_txt:hiring' => "Contratações",
	'admin:security:security_txt:hiring:help' => "Um link para quaisquer vagas relacionadas à segurança em sua organização. Lembre-se de incluir 'https://'. Veja %s",
	'admin:security:security_txt:csaf' => "CSAF",
	'admin:security:security_txt:csaf:help' => "Um link para o provider-metadata.json do seu provedor CSAF (Common Security Advisory Framework). Lembre-se de incluir 'https://'. Veja %s",
	
	'admin:site:secret:regenerated' => "O Segredo do Site foi Regenerado.",
	'admin:site:secret:prevented' => "A Regeneração do Segredo do Site foi impedida.",
	
	'admin:notification:make_admin:admin:subject' => 'Um novo Administrador do Site foi adicionado a %s',
	'admin:notification:make_admin:admin:body' => '%s tornou %s um Administrador do Site %s.

Para ver o Perfil do novo Administrador, clique aqui:
%s',
	
	'admin:notification:make_admin:user:subject' => 'Você foi adicionado como Administrador do Site %s',
	'admin:notification:make_admin:user:body' => '%s tornou você Administrador do Site %s.

Para acessar o Site, clique aqui:
%s',
	'admin:notification:remove_admin:admin:subject' => 'Um Administrador do Site foi removido de %s',
	'admin:notification:remove_admin:admin:body' => '%s removeu %s como Administrador do Site de %s.

Para visualizar o Perfil do antigo Administrador, clique aqui:
%s',
	
	'admin:notification:remove_admin:user:subject' => 'Você foi removido como Administrador do Site %s',
	'admin:notification:remove_admin:user:body' => '%s removeu você como Administrador do Site %s.

Para acessar o Site, clique aqui:
%s',
	'user:notification:validate:subject' => 'A sua conta em %s está pronta para uso.',
	'user:notification:validate:body' => 'A sua conta em %s foi validada. Agora você pode começar a usá-la.

Para acessar o Site, clique aqui:
%s',
	'user:notification:ban:subject' => 'A sua conta em %s foi banida.',
	'user:notification:ban:body' => 'A sua conta em %s foi banida.

Para acessar o Site, clique aqui:
%s',
	
	'user:notification:unban:subject' => 'A sua conta em %s não está mais banida.',
	'user:notification:unban:body' => 'A sua conta em %s não está mais banida. Você pode usar o site novamente.

Para acessar o Site, clique aqui:
%s',
	
	'user:notification:password_change:subject' => 'Your password has been changed!',
	'user:notification:password_change:body' => "A sua senha em '%s' foi alterada! Se você fez essa alteração, está tudo certo.

Se você não fez essa alteração, por favor redefina a sua senha aqui:
%s

Ou entre em contato com um Administrador do Site:
%s",
	
	'admin:notification:unvalidated_users:subject' => "Usuários aguardando aprovação em %s",
	'admin:notification:unvalidated_users:body' => "%d Usuários de '%s' estão aguardando a Aprovação de um Administrador.

Veja a Lista completa de Usuários aqui:
%s",

/**
 * Plugins
 */

	'plugins:disabled' => 'Os Plugins não estão sendo carregados porque existe um arquivo chamado "disabled" no diretório mod.',
	'plugins:settings:save:ok' => "As configurações do Plugin %s foram salvas com sucesso.",
	'plugins:settings:save:fail' => "Houve um problema ao salvar as configurações do Plugin %s.",
	'plugins:settings:remove:ok' => "Todas as configurações do Plugin %s foram removidas.",
	'plugins:settings:remove:fail' => "Ocorreu um erro ao remover todas as configurações do Plugin %s.",
	'plugins:usersettings:save:ok' => "As configurações do usuário para o Plugin %s foram salvas com sucesso.",
	'plugins:usersettings:save:fail' => "Houve um problema ao salvar as configurações do usuário para o Plugin %s.",
	
	'item:object:plugin' => 'Plugin',
	'collection:object:plugin' => 'Plugins',
	
	'plugins:settings:remove:menu:text' => "Remover todas as configurações",
	'plugins:settings:remove:menu:confirm' => "Tem certeza de que deseja remover todas as configurações, incluindo as configurações dos usuários deste plugin?",

	'admin:plugins' => "Plugins",
	'admin:plugins:activate_all' => 'Ativar Todos',
	'admin:plugins:deactivate_all' => 'Desativar Todos',
	'admin:plugins:activate' => 'Ativar',
	'admin:plugins:deactivate' => 'Desativar',
	'admin:plugins:description' => "Este Painel de Administração permite controlar e configurar as ferramentas instaladas no seu Site.",
	'admin:plugins:opt:linktext' => "Configurar ferramentas...",
	'admin:plugins:opt:description' => "Configure as ferramentas instaladas no site.",
	'admin:plugins:label:id' => "ID",
	'admin:plugins:label:name' => "Nome",
	'admin:plugins:label:authors' => "Autores",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => 'Categorias',
	'admin:plugins:label:licence' => "Licença",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:info' => "Info",
	'admin:plugins:label:files' => "Arquivos",
	'admin:plugins:label:resources' => "Recursos",
	'admin:plugins:label:screenshots' => "Captura de Tela",
	'admin:plugins:label:repository' => "Código",
	'admin:plugins:label:bugtracker' => "Reportar Problema",
	'admin:plugins:label:donate' => "Doar",
	'admin:plugins:label:moreinfo' => 'Mais Informações',
	'admin:plugins:label:version' => 'Versão',
	'admin:plugins:label:location' => 'Localização',
	'admin:plugins:label:priority' => 'Prioridade',
	'admin:plugins:label:dependencies' => 'Dependências',
	'admin:plugins:label:missing_dependency' => 'Dependência Ausente [%s].',

	'admin:plugins:warning:unmet_dependencies' => 'Este Plugin tem dependências não atendidas e não pode ser ativado. Verifique as dependências em "mais informações".',
	'admin:plugins:warning:invalid' => 'Este Plugin é inválido: %s',
	'admin:plugins:warning:invalid:check_docs' => 'Confira <a href="http://learn.elgg.org/en/stable/appendix/faqs.html">a documentação do Elgg</a> para dicas de solução de problemas.',
	'admin:plugins:cannot_activate' => 'não pode ativar',
	'admin:plugins:cannot_deactivate' => 'não pode desativar',
	'admin:plugins:already:active' => 'O(s) Plugin(s) selecionado(s) já estão ativos.',
	'admin:plugins:already:inactive' => 'O(s) Plugin(s) selecionado(s) já estão inativos.',

	'admin:plugins:set_priority:yes' => "Reordenado %s.",
	'admin:plugins:set_priority:no' => "Não foi possível reordenar %s.",
	'admin:plugins:deactivate:yes' => "Desativado %s.",
	'admin:plugins:deactivate:no' => "Não foi possível desativar %s.",
	'admin:plugins:deactivate:no_with_msg' => "Não foi possível desativar %s. Erro: %s",
	'admin:plugins:activate:yes' => "Ativado %s.",
	'admin:plugins:activate:no' => "Não foi possível ativar %s.",
	'admin:plugins:activate:no_with_msg' => "Não foi possível ativar %s. Erro: %s",
	'admin:plugins:categories:all' => 'Todas as Categorias',
	'admin:plugins:plugin_website' => 'Site do Plugin',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Versão %s',
	'admin:plugin_settings' => 'Configurações do Plugin',
	'admin:plugins:warning:unmet_dependencies_active' => 'Este Plugin está ativo, mas possui dependências não atendidas. Você pode encontrar problemas. Veja "Mais Informações" abaixo para detalhes.',

	'admin:statistics:description' => "Esta é uma visão geral das estatísticas do seu Site. Se você precisar de estatísticas mais detalhadas, um recurso profissional de administração está disponível.",
	'admin:statistics:opt:description' => "Visualize Informações e Estatísticas sobre Usuários e Objetos no seu Site.",
	'admin:statistics:opt:linktext' => "Ver Estatísticas...",
	'admin:statistics:label:user' => "Estatísticas do Usuário",
	'admin:statistics:label:numentities' => "Entidades no Site",
	'admin:statistics:label:numusers' => "Número de Usuários",
	'admin:statistics:label:numonline' => "Número de Usuários Online",
	'admin:statistics:label:onlineusers' => "Usuários Online agora",
	'admin:statistics:label:admins' => "Administradores",
	'admin:statistics:label:version' => "Versão do Elgg",
	'admin:statistics:label:version:release' => "Versão (Release)",
	'admin:statistics:label:version:version' => "Versão do Banco de Dados",
	'admin:statistics:label:version:code' => "Versão do Código",

	'admin:server:label:elgg' => 'Elgg',
	'admin:server:label:requirements' => 'Requisitos',
'admin:server:label:php' => 'PHP',
'admin:server:label:phpinfo' => 'Mostrar PHPInfo',
'admin:server:label:web_server' => 'Servidor Web',
'admin:server:label:server' => 'Servidor',
'admin:server:label:log_location' => 'Localização do Log',
'admin:server:label:php_version' => 'Versão do PHP',
'admin:server:label:php_version:required' => 'O Elgg requer a versão mínima do PHP 7.1',
'admin:server:label:php_version:required_version' => 'O Elgg requer a versão mínima do PHP %s',
'admin:server:label:php_ini' => 'Localização do arquivo php.ini',
'admin:server:label:php_log' => 'Log do PHP',
'admin:server:label:mem_avail' => 'Memória disponível',
'admin:server:label:mem_used' => 'Memória utilizada',
'admin:server:error_log' => 'Log de erros do Servidor Web',
'admin:server:label:post_max_size' => 'Tamanho máximo para POST',
'admin:server:label:upload_max_filesize' => 'Tamanho máximo para upload',
'admin:server:warning:post_max_too_small' => '(Observação: post_max_size deve ser maior que este valor para suportar uploads deste tamanho)',
'admin:server:label:memcache' => 'Memcache',
'admin:server:memcache:inactive' => 'O Memcache não está configurado neste servidor ou ainda não foi configurado no arquivo de configuração do Elgg.
Para melhor desempenho, recomenda-se ativar e configurar o Memcache (ou Redis).',

	'admin:server:label:redis' => 'Redis',
	'admin:server:redis:inactive' => 'O Redis não está configurado neste Servidor ou ainda não foi configurado no arquivo de configuração do Elgg.  
Para melhor desempenho, recomenda-se ativar e configurar o Redis (ou Memcache).',

	'admin:server:label:opcache' => 'OPcache',
	'admin:server:opcache:inactive' => 'O OPcache não está disponível neste Servidor ou ainda não foi ativado.  
Para melhor desempenho, recomenda-se ativar e configurar o OPcache.',

	
	'admin:server:requirements:php_extension' => "Extensão PHP: %s",
	'admin:server:requirements:php_extension:required' => "Esta extensão PHP é necessária para o funcionamento correto do Elgg",
	'admin:server:requirements:php_extension:recommended' => "Esta extensão PHP é recomendada para o funcionamento ideal do Elgg",
	'admin:server:requirements:rewrite' => "Regras de reescrita no .htaccess",
	'admin:server:requirements:rewrite:fail' => "Verifique seu .htaccess para garantir que as regras de reescrita estejam corretas",

	
	'admin:server:requirements:database:server' => "Servidor do Banco de Dados",
	'admin:server:requirements:database:server:required_version' => "O Elgg requer MySQL v%s ou superior para o Banco de Dados",
	'admin:server:requirements:database:client' => "Cliente do Banco de Dados",
	'admin:server:requirements:database:client:required' => "O Elgg requer pdo_mysql para conectar ao Servidor do Banco de Dados",


	'admin:server:requirements:webp' => "Suporte WebP",

	'admin:server:requirements:gc' => "Coleta de Lixo da Sessão",
	'admin:server:requirements:gc:info' => "Se a Coleta de Lixo não estiver configurada, a tabela de sessões não será limpa. Configure session.gc_divisor e session.gc_probability no seu php.ini.",
	
	'admin:user:label:search' => "Buscar Usuários:",
	'admin:user:label:searchbutton' => "Pesquisar",

	'admin:user:ban:no' => "Não foi possível banir o Usuário",
	'admin:user:ban:yes' => "Usuário Banido.",
	'admin:user:self:ban:no' => "Você não pode se banir",
	'admin:user:unban:no' => "Não foi possível Liberar o Usuário",
	'admin:user:unban:yes' => "Usuário Liberado.",
	'admin:user:delete:no' => "Não foi possível excluir o Usuário",
	'admin:user:delete:yes' => "O Usuário %s foi excluido do Sistema.",
	'admin:user:self:delete:no' => "Você não pode excluir a sua própria conta.",

	'admin:user:resetpassword:yes' => "Senha Redefinida, Usuário Notificado.",
	'admin:user:resetpassword:no' => "Não foi possível redefinir a senha.",

	'admin:user:makeadmin:yes' => "O Usuário agora é Administrador.",
	'admin:user:makeadmin:no' => "Não foi possível tornar este Usuário um Administrador.",

	'admin:user:removeadmin:yes' => "O Usuário não é mais Administrador.",
	'admin:user:removeadmin:no' => "Não foi possível remover os privilégios de Administrador deste Usuário.",
	'admin:user:self:removeadmin:no' => "Você não pode remover os seus próprios privilégios de Administrador.",

	'admin:configure_utilities:menu_items' => 'Itens do Menu',
	'admin:menu_items:configure' => 'Configurar Itens do Menu Principal',
	'admin:menu_items:description' => 'Selecione a ordem dos Itens do Menu do Site. Itens não configurados serão adicionados ao final da lista.',
	'admin:menu_items:hide_toolbar_entries' => 'Remover links do Menu da Barra de Ferramentas?',
	'admin:menu_items:saved' => 'Itens do Menu salvos.',
	'admin:add_menu_item' => 'Adicionar um Item Personalizado ao Menu',
	'admin:add_menu_item:description' => 'Preencha o nome de exibição e a URL para adicionar Itens Personalizados ao seu Menu de navegação.',


	'admin:configure_utilities:default_widgets' => 'Widgets Padrão',
	'admin:default_widgets:unknown_type' => 'Tipo de Widget Desconhecido',
	'admin:default_widgets:instructions' => 'Adicione, remova, posicione e configure os Widgets padrão para a página de Widgets selecionada. Essas alterações afetarão apenas os novos usuários do Site.',


	'admin:robots.txt:instructions' => "Edite o arquivo robots.txt deste Site abaixo",
	'admin:robots.txt:plugins' => "Os plugins estão adicionando o seguinte ao arquivo robots.txt",
	'admin:robots.txt:subdir' => "A ferramenta robots.txt não funcionará porque o Elgg está instalado em um subdiretório",
	'admin:robots.txt:physical' => "A ferramenta robots.txt não funcionará porque um arquivo robots.txt físico está presente",


	'admin:maintenance_mode:default_message' => 'Este Site está em Manutenção',
	'admin:maintenance_mode:instructions' => 'O Modo de Manutenção deve ser usado para atualizações e outras grandes alterações no Site. Quando ativado, somente administradores podem acessar e navegar pelo Site.',
	'admin:maintenance_mode:mode_label' => 'Modo de Manutenção',
	'admin:maintenance_mode:message_label' => 'Mensagem exibida aos usuários quando o modo de manutenção estiver ativado',
	'admin:maintenance_mode:saved' => 'As configurações do Modo de Manutenção foram salvas.',
	'admin:maintenance_mode:indicator_menu_item' => 'O Site está em Modo de Manutenção.',
	'admin:login' => 'Acesso do Administrador',


/**
 * User settings / Configurações do Usuário
 */

	'usersettings:statistics' => "Suas Estatísticas",
	'usersettings:statistics:user' => "Estatísticas de %s",
	'usersettings:statistics:opt:linktext' => "Estatísticas da Conta",

	'usersettings:statistics:login_history' => "Histórico de Acessos",
	'usersettings:statistics:login_history:date' => "Data",
	'usersettings:statistics:login_history:ip' => "Endereço IP",

	'usersettings:user' => "Configurações de %s",
	'usersettings:user:opt:linktext' => "Altere suas Configurações",

	'usersettings:plugins:opt:linktext' => "Configure as suas Ferramentas",
	
	'usersettings:statistics:yourdetails' => "Seus Dados",
	'usersettings:statistics:details:user' => "Detalhes de %s",
	'usersettings:statistics:numentities:user' => "Estatísticas de Conteúdo de %s",
	'usersettings:statistics:label:name' => "Nome Completo",
	'usersettings:statistics:label:email' => "E-mail",
	'usersettings:statistics:label:lastlogin' => "Último Acesso",
	'usersettings:statistics:label:membersince' => "Membro Desde",
	'usersettings:statistics:label:numentities' => "Seu Conteúdo",

	
	'usersettings:delayed_email:interval' => "Configure o intervalo em que as notificações por e-mail serão entregues com atraso",
	'usersettings:delayed_email:interval:help' => "Todas as notificações por e-mail atrasadas serão agrupadas e entregues em um único e-mail no intervalo configurado",


/**
 * Activity river
 */

	'river:all' => 'Todas as Atividades do Site',
	'river:mine' => 'Minhas Atividades',
	'river:owner' => 'Atividades %s',
	'river:friends' => 'Atividades dos Amigos',
	'river:select' => 'Exibir %s',
	'river:comments:all' => 'Ver Todos os %u Commentários',

/**
 * Icons / Ícones
 */

	'icon:size' => "Tamanho do ícone",
	'icon:size:topbar' => "Barra superior",
	'icon:size:tiny' => "Minúsculo",
	'icon:size:small' => "Pequeno",
	'icon:size:medium' => "Médio",
	'icon:size:large' => "Grande",
	'icon:size:master' => "Extra grande",
	
	'entity:edit:icon:crop_messages:generic' => "A imagem selecionada não atende às dimensões recomendadas. Isso pode resultar em ícones de baixa qualidade.",
	'entity:edit:icon:crop_messages:width' => "Recomenda-se usar uma imagem com largura mínima de pelo menos %dpx.",
	'entity:edit:icon:crop_messages:height' => "Recomenda-se usar uma imagem com altura mínima de pelo menos %dpx.",
	'entity:edit:icon:crop:img:alt' => "Imagem enviada",
	'entity:edit:icon:file:label' => "Enviar um novo ícone",
	'entity:edit:icon:file:help' => "Deixe em branco para manter o ícone atual.",
	'entity:edit:icon:remove:label' => "Remover ícone",


	'entity:edit:header:file:label' => "Enviar um novo cabeçalho",
	'entity:edit:header:file:help' => "Deixe em branco para manter o cabeçalho atual.",
	'entity:edit:header:remove:label' => "Remover imagem do cabeçalho",


/**
 * Generic action words / Termos genéricos para ações
 */

	'save' => "Salvar",
	'save_go' => "Salvar e ir para %s",
	'reset' => 'Redefinir',
	'publish' => "Publicar",
	'feature' => "Feature",
	'unfeature' => "Unfeature",
	'cancel' => "Cancelar",
	'saving' => "Salvando ...",
	'update' => "Atualizar",
	'preview' => "Visualização",
	'edit' => "Editar",
	'delete' => "Excluir",
	'trash' => "Lixeira",
	'accept' => "Aceitar",
	'reject' => "Rejeitar",
	'decline' => "Declínio",
	'approve' => "Aprovar",
	'activate' => "Ativar",
	'deactivate' => "Desativar",
	'disapprove' => "Reprovar",
	'revoke' => "Revogar",
	'load' => "Carregar",
	'upload' => "Upload",
	'download' => "Download",
	'ban' => "Proibir",
	'unban' => "Liberado (Unban)",
	'banned' => "Banido",
	'enable' => "Habilitar",
	'disable' => "Desativar",
	'request' => "Solicitar",
	'complete' => "Completo",
	'open' => 'Abrir',
	'close' => 'Fechar',
	'hide' => 'Ocultar',
	'show' => 'Exibir',
	'reply' => "Responder",
	'more' => 'Mais',
	'more_info' => 'Mais Informações',
	'comments' => 'Comentários',
	'import' => 'Importar',
	'export' => 'Exportar',
	'untitled' => 'Sem Título',
	'help' => 'Ajuda',
	'send' => 'Enviar',
	'resend' => 'Reenviar',
	'post' => 'Publicar',
	'submit' => 'Enviar',
	'comment' => 'Comentar',
	'upgrade' => 'Atualizar',
	'sort' => 'Organizar',
	'filter' => 'Filtros',
	'new' => 'Novo',
	'add' => 'Adicionar',
	'create' => 'Criar',
	'remove' => 'Remover',
	'revert' => 'Reverter',
	'validate' => 'Validar',
	'read_more' => 'Leia Mais',
	'next' => 'Próximo',
	'previous' => 'Anterior',
	'older' => 'Mais Antigos',
	'newer' => 'Mais Recentes',
	
	'site' => 'Site',
	'activity' => 'Atividades',
	'members' => 'Membros',
	'menu' => 'Menu',
	'item' => 'Item',

	'up' => 'Acima',
	'down' => 'Abaixo',
	'top' => 'Topo',
	'bottom' => 'Fundo',
	'right' => 'Direita',
	'left' => 'Esquerda',
	'back' => 'Voltar',

	'invite' => "Convidar",

	'resetpassword' => "Redefinir a Senha",
	'changepassword' => "Alterar a Senha",
	'makeadmin' => "Tornar Admin",
	'removeadmin' => "Remover Admin",

	'option:yes' => "Sim",
	'option:no' => "Não",

	'unknown' => 'Desconhecido',
	'never' => 'Nunca',

	'active' => 'Ativo',
	'total' => 'Total',
	'unvalidated' => 'Não Validado',
	
	'ok' => 'Blz!',
	'any' => 'Qualquer',
	'error' => 'Erro',

	'other' => 'Outro',
	'options' => 'Opções',
	'advanced' => 'Avançado',

	'learnmore' => "Clique Aqui para saber mais.",
	'unknown_error' => 'Erro Desconhecido',

	'content' => "conteúdo",
	'content:latest' => 'Última Atividade',
	
	'list:out_of_bounds' => "Você chegou a uma parte da lista sem nenhum conteúdo, porém há conteúdo disponível.",
	'list:out_of_bounds:link' => "Voltar para a Página Inicial",
	'list:error:getter:user' => 'Ocorreu um erro ao buscar o conteúdo',
	'list:error:getter:admin' => "O getter '%s' retornou um(a) '%s', porém o visualizador '%s' requer um array",

	'link:text' => 'ver link',
	
	'scroll_to_top' => 'Voltar ao Topo',

/**
 * Generic questions / Perguntas Genéricas
 */

	'question:areyousure' => 'Você tem certeza?',

/**
 * Status
 */

	'status' => 'Status',
	'status:unsaved_draft' => 'Rascunho Não Salvo',
	'status:draft' => 'Rascunho',
	'status:unpublished' => 'Não Publicado',
	'status:published' => 'Publicado',
	'status:featured' => 'Destaque',
	'status:open' => 'Aberto',
	'status:closed' => 'Fechado',
	'status:enabled' => 'Habilitado',
	'status:disabled' => 'Desabilitado',
	'status:unavailable' => 'Indisponível',
	'status:active' => 'Ativo',
	'status:inactive' => 'Inativo',
	'status:deleted' => 'Excluído',
	'status:trashed' => 'Na Lixeira',

/**
 * Generic sorts / Classificações Genéricas
 */

	'sort:newest' => 'Recentes',
	'sort:oldest' => 'Antigos',
	'sort:popular' => 'Populares',
	'sort:alpha' => 'Alfabética',
	'sort:priority' => 'Prioridade',
	'sort:relevance' => 'Relevância',
	'sort:az' => '%s (A-Z)',
	'sort:za' => '%s (Z-A)',

/**
 * Generic data words / Palavras Genéricas 
 */

	'title' => "Título",
	'description' => "Descrição",
	'tags' => "Tags",
	'all' => "Todas as Atividades",
	'mine' => "Minhas Atividades",

	'by' => 'por',
	'none' => 'Nenhum',

	'annotations' => "Anotações",
	'relationships' => "Relacionamentos",
	'metadata' => "Metadata",
	'tagcloud' => "Núvem de Tags",

	'on' => 'Ligado',
	'off' => 'Desligado',

	'number_counter:decimal_separator' => ".",
	'number_counter:thousands_separator' => ",",
	'number_counter:view:thousand' => "%sK",
	'number_counter:view:million' => "%sM",
	'number_counter:view:billion' => "%sB",
	'number_counter:view:trillion' => "%sT",

/**
 * Entity actions / Ações da Entidade
 */

	'edit:this' => 'Editar isso',
	'delete:this' => 'Excluir isso',
	'trash:this' => 'Mover para Lixeira',
	'restore:this' => 'Restaurar',
	'restore:this:move' => 'Restaurar e mover',
	'comment:this' => 'Comentar',

/**
 * Input / output strings / Mensagens de Entrada e Saída
 */

	'deleteconfirm' => "Tem certeza de que deseja excluir este item?",
	'trashconfirm' => "Tem certeza de que deseja enviar este item para a Lixeira?",
	'restoreconfirm' => "Tem certeza de que deseja restaurar este item?",
	'restoreandmoveconfirm' => "Tem certeza de que deseja restaurar e mover este item?",
	'deleteconfirm:plural' => "Tem certeza de que deseja excluir estes itens?",
	'fileexists' => "Um arquivo já foi enviado. Para substituí-lo, selecione um novo abaixo",
	'input:file:upload_limit' => "O tamanho máximo permitido para arquivos é %s",
	'input:container_guid:info' => "Este conteúdo será publicado em %s",


/**
 * User add / Adicionar Usuário
 */

	'useradd:subject' => 'Conta de Usuário Criada',
	'useradd:body' => 'Uma conta de usuário foi criada para você em %s. Para acessar, visite:

%s

E acesse com estas credenciais:

Nome de Usuário: %s
Senha: %s

Depois de acessar a sua conta, recomendamos fortemente que você altere a sua senha.',

/**
 * Messages / Mensagens
 */
	'messages:title:success' => 'Sucesso!',
	'messages:title:error' => 'Erro',
	'messages:title:warning' => 'Aviso',
	'messages:title:help' => 'Ajuda',
	'messages:title:notice' => 'Notificação',
	'messages:title:info' => 'Informação',


/**
 * Time / Tempo
 */

	'input:date_format' => 'd-m-Y',
	'input:date_format:datepicker' => 'dd-mm-yy', // jQuery UI datepicker format
	'input:time_format' => 'g:ia',

	'friendlytime:updated' => "%s - Editado",
	'friendlytime:updated:title' => "Criado em: %s \nAtualizado em: %s",
	
	'friendlytime:justnow' => "agorinha!",
	'friendlytime:minutes' => "há %s minutos",
	'friendlytime:minutes:singular' => "há um minuto",
	'friendlytime:hours' => "há %s horas",
	'friendlytime:hours:singular' => "há uma hora",
	'friendlytime:days' => "há %s dias",
	'friendlytime:days:singular' => "ontem",
	'friendlytime:date_format' => 'j \d\e F \d\e Y \@ G\hi',
	'friendlytime:date_format:short' => 'j M Y',

	'friendlytime:future:minutes' => "em %s minutos",
	'friendlytime:future:minutes:singular' => "em um minuto",
	'friendlytime:future:hours' => "em %s horas",
	'friendlytime:future:hours:singular' => "em uma hora",
	'friendlytime:future:days' => "em %s dias",
	'friendlytime:future:days:singular' => "amanhã",

	'date:month:01' => 'Janeiro %s',
	'date:month:02' => 'Fevereiro %s',
	'date:month:03' => 'Março %s',
	'date:month:04' => 'Abril %s',
	'date:month:05' => 'Maio %s',
	'date:month:06' => 'Junho %s',
	'date:month:07' => 'Julho %s',
	'date:month:08' => 'Agosto %s',
	'date:month:09' => 'Setembro %s',
	'date:month:10' => 'Otubro %s',
	'date:month:11' => 'Novembro %s',
	'date:month:12' => 'Dezembro %s',

	'date:month:short:01' => 'Jan %s',
	'date:month:short:02' => 'Fev %s',
	'date:month:short:03' => 'Mar %s',
	'date:month:short:04' => 'Abr %s',
	'date:month:short:05' => 'Maio %s',
	'date:month:short:06' => 'Jun %s',
	'date:month:short:07' => 'Jul %s',
	'date:month:short:08' => 'Ago %s',
	'date:month:short:09' => 'Set %s',
	'date:month:short:10' => 'Out %s',
	'date:month:short:11' => 'Nov %s',
	'date:month:short:12' => 'Dez %s',

	'date:weekday:0' => 'Domingo',
	'date:weekday:1' => 'Segunda-feira',
	'date:weekday:2' => 'Terça-feira',
	'date:weekday:3' => 'Quarta-feira',
	'date:weekday:4' => 'Quinta-feira',
	'date:weekday:5' => 'Sexta-feira',
	'date:weekday:6' => 'Sábado',

	'date:weekday:short:0' => 'Dom',
	'date:weekday:short:1' => 'Seg',
	'date:weekday:short:2' => 'Ter',
	'date:weekday:short:3' => 'Qua',
	'date:weekday:short:4' => 'Qui',
	'date:weekday:short:5' => 'Sex',
	'date:weekday:short:6' => 'Sáb',

	'interval:minute' => 'A cada minuto',
	'interval:fiveminute' => 'A cada cinco minutos',
	'interval:fifteenmin' => 'A cada quinze minutos',
	'interval:halfhour' => 'A cada meia hora',
	'interval:hourly' => 'A cada hora',
	'interval:daily' => 'Diariamente',
	'interval:weekly' => 'Semanalmente',
	'interval:monthly' => 'Mensalmente',
	'interval:yearly' => 'Anualmente',


/**
 * System settings / Configurações do Sistema
 */

	'installation:sitename' => "O Nome do seu Site:",
	'installation:sitedescription' => "Descrição curta do seu Site (opcional):",
	'installation:sitedescription:help' => "Com Plugins Padrão, isso aparece apenas na Meta Tag de descrição para resultados em mecanismos de busca.",
	'installation:sitepermissions' => "Permissões de Acesso Padrão:",
	'installation:language' => "Idioma Padrão do seu Site:",
	'installation:debug' => "Controle a quantidade de informações gravadas no log do Servidor.",
	'installation:debug:label' => "Nível do log:",
	'installation:debug:none' => 'Desativar Registro (Recomendado)',
	'installation:debug:error' => 'Registrar Apenas Erros Críticos',
	'installation:debug:warning' => 'Registrar Erros e Avisos',
	'installation:debug:notice' => 'Registrar Todos os Erros, Avisos e Notificações',
	'installation:debug:info' => 'Registrar Tudo',


	// Walled Garden support / Suporte para Area Restrita (Walled Garden)
	'installation:registration:description' => 'Se estiver ativado, os visitantes podem criar suas próprias Contas de Usuário.',
	'installation:registration:label' => 'Permitir Cadastro de Visitantes',
	'installation:adminvalidation:description' => 'Se estiver ativado, novos Usuários cadastrados precisam de validação manual por um administrador antes utilizarem o Site.',
	'installation:adminvalidation:label' => 'Novos Usuários requerem validação manual por um Administrador',
	'installation:adminvalidation:notification:description' => 'Quando ativado, Administradores do site receberão uma notificação sobre Validações Pendentes de usuários. Um administrador pode desativar essa notificação na página de configurações pessoais.',
	'installation:adminvalidation:notification:label' => 'Notificar Administradores sobre Validações Pendentes de Usuários',
	'installation:adminvalidation:notification:direct' => 'Direta',
	'installation:walled_garden:description' => 'Se estiver ativado, os visitantes não conectados verão apenas páginas marcadas como públicas (como a página de Acesso e Cadastro).',
	'installation:walled_garden:label' => 'Restringir Páginas Apenas a Usuários Conectados',


	'installation:siteemail' => "Endereço de e-mail do Site (usado para enviar E-mails do Sistema):",
	'installation:siteemail:help' => "Aviso: Não use um endereço de e-mail que possa estar associado a outros serviços de terceiros, como Sistemas de Ticket, que realizam análise de e-mails recebidos, pois isso pode expor você e seus usuários a vazamento involuntário de dados privados e Tokens de segurança. Idealmente, crie um novo endereço de e-mail dedicado que será usado somente para este Site.",
	'installation:default_limit' => "Número padrão de itens por página",

	'admin:site:access:warning' => "Esta é a configuração de privacidade sugerida aos Usuários quando criam novo conteúdo. Alterá-la não modifica o acesso ao conteúdo.",
	'installation:allow_user_default_access:description' => "Habilite esta opção para permitir que os usuários definam sua própria configuração de privacidade sugerida, que substituirá a sugestão do sistema.",
	'installation:allow_user_default_access:label' => "Permitir Acesso Padrão do Usuário",


	'installation:simplecache:description' => "O Cache Simples aumenta o desempenho ao armazenar em cache conteúdo estático, incluindo alguns arquivos CSS e JavaScript.",
	'installation:simplecache:label' => "Usar Cache Simples (Recomendado)",

	'installation:cache_symlink:description' => "O link simbólico para o diretório de cache simples permite que o servidor sirva visualizações estáticas sem passar pelo mecanismo, o que melhora consideravelmente o desempenho e reduz a carga do servidor",
	'installation:cache_symlink:label' => "Usar link simbólico para o diretório de cache simples (recomendado)",
	'installation:cache_symlink:warning' => "O link simbólico foi estabelecido. Se, por algum motivo, você quiser removê-lo, exclua o diretório de link simbólico do seu servidor",
	'installation:cache_symlink:paths' => 'O link simbólico corretamente configurado deve vincular <i>%s</i> a <i>%s</i>',
	'installation:cache_symlink:error' => "Devido à configuração do seu servidor, o link simbólico não pode ser estabelecido automaticamente. Consulte a documentação e crie o link simbólico manualmente.",

	'installation:minify:description' => "O Cache simples também pode melhorar o desempenho ao comprimir arquivos JavaScript e CSS. (Requer que o Cache simples esteja ativado.)",
	'installation:minify_js:label' => "Comprimir JavaScript (Recomendado)",
	'installation:minify_css:label' => "Comprimir CSS (Recomendado)",

	'installation:htaccess:needs_upgrade' => "Você deve atualizar o seu arquivo .htaccess (use install/config/htaccess.dist como referência).",
	'installation:htaccess:localhost:connectionfailed' => "O Elgg não conseguiu conectar a si mesmo para testar corretamente as regras de reescrita. Verifique se o cURL está funcionando e se não há restrições de IP impedindo conexões com o localhost.",

	'installation:systemcache:description' => "O Cache do Sistema reduz o tempo de carregamento do Elgg armazenando dados em arquivos.",
	'installation:systemcache:label' => "Usar Cache do Sistema (Recomendado)",

	'admin:legend:system' => 'Sistema',
	'admin:legend:caching' => 'Cache',
	'admin:legend:content' => 'Conteúdo',
	'admin:legend:comments' => 'Comentários',
	'admin:legend:content_access' => 'Acesso ao Conteúdo',
	'admin:legend:site_access' => 'Acesso ao Site',
	'admin:legend:debug' => 'Depuração e Registro de Log',

	
	'config:i18n:allowed_languages' => "Idiomas Permitidos",
	'config:i18n:allowed_languages:help' => "Apenas os Idiomas Permitidos poderão ser usados pelos usuários. O inglês e o idioma do Site são sempre permitidos.",
	'config:i18n:who_can_change_language' => "Quem pode alterar o idioma?",
	'config:i18n:who_can_change_language:everyone' => "Todos",
	'config:i18n:who_can_change_language:admin_only' => "Apenas Administradores",
	'config:i18n:who_can_change_language:nobody' => "Ninguém",

	
	'config:users:remove_unvalidated_users_days' => "Número de dias após os quais usuários não validados serão removidos",
	'config:users:remove_unvalidated_users_days:help' => "Usuários não validados serão automaticamente removidos após o número de dias configurado. Se deixado em branco, os usuários não validados não serão removidos automaticamente.",
	'config:users:can_change_username' => "Permitir que os usuários alterem seu nome de usuário",
	'config:users:can_change_username:help' => "Se não permitido, apenas administradores poderão alterar o nome de usuário dos usuários.",
	'config:users:user_joined_river' => "Adicionar atividade no feed quando um usuário se registrar no site",
	'config:remove_branding:label' => "Remover a marca do Elgg",
	'config:remove_branding:help' => "Em várias partes do site existem links e logotipos que indicam que o site foi criado usando o Elgg. Se remover a marca, considere fazer uma doação em https://elgg.org/about/supporters",
	'config:disable_rss:label' => "Desativar Feeds RSS",
	'config:disable_rss:help' => "Desative isto para não promover mais a disponibilidade de Feeds RSS",
	'config:friendly_time_number_of_days:label' => "Número de dias em que a hora amigável é exibida",
	'config:friendly_time_number_of_days:help' => "Você pode configurar por quantos dias a notação de tempo amigável será usada. Após o período definido, a data será exibida no formato tradicional. Definir como 0 desativa o formato amigável.",
	'config:content:comment_box_collapses' => "A caixa de comentário recolhe após o primeiro comentário no conteúdo",
	'config:content:comment_box_collapses:help' => "Isso só se aplica se a lista de comentários estiver ordenada da mais recente para a mais antiga",
	'config:content:comments_group_only' => "Apenas Membros do Grupo podem comentar em conteúdos do grupo",
	'config:content:comments_latest_first' => "Os comentários devem ser listados com os mais recentes primeiro",
	'config:content:comments_latest_first:help' => "Controla o comportamento padrão da listagem de comentários em uma página de conteúdo. Se desativado, também moverá a caixa de comentário para o final da lista de comentários.",
	'config:content:comments_max_depth' => "Níveis máximos de comentários encadeados",
	'config:content:comments_max_depth:help' => "Quando ativado, os comentários podem ser respondidos até o nível máximo configurado.",
	'config:content:comments_max_depth:none' => "Comentários encadeados não permitidos",
	'config:content:comments_per_page' => "Número de comentários por página",
	'config:content:pagination_behaviour' => "Comportamento padrão da paginação de listas",
	'config:content:pagination_behaviour:help' => "Controla como os dados da lista são atualizados ao usar paginação. Listagens individuais podem substituir esse comportamento padrão.",
	'config:content:pagination_behaviour:navigate' => "Navegar para a próxima página",
	'config:content:pagination_behaviour:ajax-replace' => "Substituir os dados da lista sem recarregar a página inteira",
	'config:content:pagination_behaviour:ajax-append' => "Acrescentar novos dados à lista antes ou depois",
	'config:content:pagination_behaviour:ajax-append-auto' => "Acrescentar novos dados à lista automaticamente ao rolar a página",
	'config:content:mentions_display_format' => "Formato de exibição das menções",
	'config:content:mentions_display_format:help' => "Define como um usuário mencionado será exibido no conteúdo",
	'config:content:mentions_display_format:username' => "Nome de usuário",
	'config:content:mentions_display_format:display_name' => "Nome exibido",
	'config:content:trash_enabled:label' => "Ativar lixeira",
	'config:content:trash_enabled:help' => "Ao excluir um item, ele pode ser movido para a lixeira antes de ser removido permanentemente. Itens na lixeira podem ser restaurados pelo usuário.",
	'config:content:trash_retention:label' => "Número de dias que o conteúdo permanecerá na lixeira após ser excluído",
	'config:content:trash_retention:help' => "Você pode configurar por quantos dias os itens excluídos ficarão na lixeira. Após esse período, serão excluídos permanentemente. Use 0 para manter indefinidamente.",
	'config:email' => "E-mail",
	'config:email_html_part:label' => "Ativar e-mails em HTML",
	'config:email_html_part:help' => "Os e-mails enviados serão formatados com um template em HTML",
	'config:email_html_part_images:label' => "Substituir imagens em e-mails",
	'config:email_html_part_images:help' => "Controla se e como as imagens em e-mails enviados devem ser processadas. Quando ativado, todas as imagens serão incorporadas nos e-mails. Nem todos os clientes de e-mail suportam todas as opções, portanto, teste a escolhida.",
	'config:email_html_part_images:base64' => "Codificadas em Base64",
	'config:email_html_part_images:attach' => "Anexos",
	'config:delayed_email:label' => "Ativar notificações por e-mail com atraso",
	'config:delayed_email:help' => "Oferece aos usuários notificações por e-mail agrupadas por período (diário, semanal)",
	'config:message_delay:label' => "Tempo de exibição da mensagem do sistema",
	'config:message_delay:help' => "Número padrão de segundos antes que uma mensagem de sucesso desapareça",


	'upgrading' => 'Atualizando...',
	'upgrade:core' => 'A instalação do Elgg foi Atualizada!',
	'upgrade:unlock' => 'Desbloquear Atualização',
	'upgrade:unlock:confirm' => "O Banco de Dados está bloqueado para outra atualização. Executar atualizações simultâneas é perigoso. Você deve continuar apenas se tiver certeza de que não há outra atualização em andamento. Desbloquear?",
	'upgrade:terminated' => 'A atualização foi encerrada por um manipulador de evento.',
	'upgrade:locked' => "Não é possível atualizar. Outra atualização está em andamento. Para limpar o bloqueio de atualização, acesse a seção Admin.",
	'upgrade:unlock:success' => "Atualização desbloqueada com sucesso.",

	'admin:pending_upgrades' => 'O site tem atualizações pendentes que exigem a sua atenção imediata.',
	'admin:view_upgrades' => 'Ver Atualizações Pendentes.',
	'item:object:elgg_upgrade' => 'Atualização do Site',
	'collection:object:elgg_upgrade' => 'Atualizações do Site',
	'admin:upgrades:none' => 'Sua instalação está atualizada!',

	'upgrade:success_count' => 'Atualizado:',
	'upgrade:error_count' => 'Erros: %s',
	'upgrade:finished' => 'Atualização Concluída',
	'upgrade:finished_with_errors' => '<p>Atualização finalizada com erros. Recarregue a página e tente executar a atualização novamente.</p>
	<p>Se o erro persistir, verifique o log de erros do servidor para identificar a possível causa. Você pode pedir ajuda para resolver o problema no <a href="http://community.elgg.org/groups/profile/179063/elgg-technical-support">grupo de suporte técnico</a> da comunidade Elgg.</p>',
	'upgrade:should_be_skipped' => 'Nenhum item para atualizar',
	'upgrade:count_items' => '%d itens para atualizar',
	
	// Strings specific for the database guid columns reply upgrade
	'admin:upgrades:database_guid_columns' => 'Alinhar Colunas GUID do Banco de Dados',
	
/**
 * Welcome / Bem-vindo
 */

	'welcome' => "Bem-vindo",
	'welcome:user' => 'Bem-vindo %s',

/**
 * Emails
 */

	'email:from' => 'De',
	'email:to' => 'Para',
	'email:subject' => 'Assunto',
	'email:body' => 'Corpo',

	'email:settings' => "Configurações de E-mail",
	'email:address:label' => "Endereço de E-mail",
	'email:address:help:confirm' => "Alteração de endereço de e-mail Pendente para '%s'. Verifique a caixa de entrada para obter instruções.",
	'email:address:password' => "Senha",
	'email:address:password:help' => "Para alterar o seu endereço de e-mail, você precisa fornecer a sua senha atual.",

	'email:save:success' => "Novo endereço de e-mail salvo.",
	'email:save:fail' => "Não foi possível salvar o novo endereço de e-mail.",
	'email:save:fail:password' => "A senha não corresponde à sua senha atual, não foi possível alterar o e-mail",

	'friend:newfriend:subject' => "%s fez de você um amigo!",
	'friend:newfriend:body' => "%s adicionou você como amigo!

Para ver o perfil deles, clique aqui:

%s",

	'email:changepassword:subject' => "Senha Alterada!",
	'email:changepassword:body' => "A Senha foi Alterada.",

	'email:resetpassword:subject' => "A Senha foi Redefinida!",
	'email:resetpassword:body' => "A Senha foi Redefinida para: %s",

	'email:changereq:subject' => "Solicitação de Alteração de Senha.",
	'email:changereq:body' => "Alguém (do endereço IP %s) solicitou a alteração da senha desta conta.

Se você solicitou esta alteração, clique no link abaixo. Caso contrário, ignore este e-mail.

%s",
	
	'account:email:request:success' => "Seu novo endereço de e-mail será salvo após a confirmação. Verifique a caixa de entrada de '%s' para obter mais instruções.",
	'email:request:email:subject' => "Por favor confirme o seu endereço de e-mail",
	'email:request:email:body' => "Você solicitou a alteração do seu endereço de e-mail em '%s'. Se você não solicitou essa alteração, pode ignorar este e-mail.

Para confirmar a alteração do endereço de e-mail, por favor clique neste link:
%s

Atenção! Este link é válido por apenas 1 hora.",
	
	'account:email:request:error:no_new_email' => "Nenhuma alteração de e-mail pendente",
	
	'email:confirm:email:old:subject' => "Seu endereço de e-mail foi alterado",
	'email:confirm:email:old:body' => "Seu endereço de e-mail em '%s' foi alterado. A partir de agora, você receberá notificações no e-mail '%s'.

Se você não solicitou essa alteração, por favor, entre em contato com um Administrador do Site.
%s",
	
	'email:confirm:email:new:subject' => "Seu endereço de e-mail foi alterado",
	'email:confirm:email:new:body' => "O endereço de e-mail em '%s' foi alterado. A partir de agora, você receberá Notificações neste endereço de e-mail.

Se você não solicitou essa alteração, por favor, entre em contato com o Administrador do Site.
%s",

	'account:email:admin:validation_notification' => "Avise-me quando houver Usuários aguardando a Validação pelo Administrador",
	'account:email:admin:validation_notification:help' => "Devido às configurações do Site, novos Usuários precisam ser validados manualmente pelo Administrador. Com essa opção, você pode desativar as Notificações sobre Solicitações Pendentes de Validação.",
	
	'account:validation:pending:title' => "Validação da Conta Pendente",
	'account:validation:pending:content' => "Conta registrada com sucesso! Antes de usar o nosso sistema, um Administrador do Site precisa validar o seu cadastro. Você receberá um e-mail quando isso acontecer.",

/**
 * user default access / Nível de Acesso Padrão do Usuário
 */

	'default_access:settings' => "Seu Nível de Acesso Padrão",
	'default_access:label' => "Acesso Padrão",
	'user:default_access:success' => "Seu novo Nível de Acesso Padrão foi salvo.",
	'user:default_access:failure' => "Não foi possível salvar seu novo Nível de Acesso Padrão.",


/**
 * Comments / Comentários
 */

	'comments:count' => "%s comentários",
	'item:object:comment' => 'Comentário',
	'collection:object:comment' => 'Comentários',
	'notification:object:comment:create' => "Enviar Notificação Quando um Comentário for Criado",

	'river:object:default:comment' => '%s comentou em %s',

	'generic_comments:add' => "Deixe um Comentário",
	'generic_comments:edit' => "Editar Comentário",
	'generic_comments:latest' => "Comentários Mais Recentes",
	'generic_comment:login_required' => "Você precisa estar conectado para comentar.",
	'generic_comment:posted' => "O seu comentário foi publicado com sucesso!",
	'generic_comment:updated' => "Comentário atualizado com sucesso.",
	'entity:delete:object:comment:success' => "O comentário foi excluído com sucesso.",
	'generic_comment:blank' => "Desculpe, você precisa digitar algo no comentário antes de salvar.",
	'generic_comment:notfound' => "Desculpe, não foi possível encontrar o comentário especificado.",
	'generic_comment:failure' => "Um erro inesperado aconteceu ao salvar o comentário.",
	'generic_comment:none' => 'Sem comentários',
	'generic_comment:on' => '%s em %s',
	'generic_comment:by_owner' => 'Comentário do Autor',

	'generic_comment:notification:subject' => 'Re: %s',
	'generic_comment:notification:owner:summary' => 'Você recebeu um novo comentário em: %s',
	'generic_comment:notification:owner:body' => "Você recebeu um novo comentário. O texto é:

%s

Para responder ou ver o item original, clique aqui:
%s",
	
	'generic_comment:notification:user:summary' => 'Um novo comentário em: %s',
	'generic_comment:notification:user:body' => "Um novo comentário foi feito. O texto é:

%s

Para responder ou ver o item original, clique aqui:
%s",

	'notification:mentions:object:comment:subject' => '%s mencionou você em um comentário',
	'notification:mentions:object:comment:body' => '%1$s mencionou você em um comentário.
	
Para ver o comentário completo, clique no link abaixo:
%3$s',

/**
 * Entities / Entidades
 */

	'byline' => 'Por %s',
	'byline:ingroup' => 'no Grupo %s',
	
	'entity:delete:item' => 'Item',
	'entity:delete:item_not_found' => 'Item não encontrado.',
	'entity:delete:permission_denied' => 'Você não tem permissão para excluir este item.',
	'entity:delete:success' => '%s foi excluído.',
	'entity:delete:fail' => 'Não foi possível excluir %s.',

	'entity:restore:item' => 'Item',
	'entity:restore:item_not_found' => 'Item não encontrado',
	'entity:restore:container_permission' => 'Você não tem permissão para restaurar este item para %s',
	'entity:restore:permission_denied' => 'Você não tem permissão para restaurar este item',
	'entity:restore:success' => '%s foi restaurado com sucesso',
	'entity:restore:fail' => 'Não foi possível restaurar %s',
	
	'entity:subscribe' => "Inscrever-se",
	'entity:subscribe:disabled' => "Suas Configurações Padrão de Notificação impedem que você se Inscreva neste conteúdo",
	'entity:subscribe:success' => "Você se Inscreveu com Sucesso em %s",
	'entity:subscribe:fail' => "Ocorreu um erro ao se Inscrever em %s",
	
	'entity:unsubscribe' => "Cancelar Inscrição",
	'entity:unsubscribe:success' => "Você Cancelou a Inscrição com Sucesso em %s",
	'entity:unsubscribe:fail' => "Ocorreu um erro ao Cancelar a Inscrição em %s",
	
	'entity:mute' => "Silenciar Notificações",
	'entity:mute:success' => "Você Silenciou com sucesso as Notificações de %s",
	'entity:mute:fail' => "Ocorreu um erro ao tentar Silenciar as Notificações de %s",
	
	'entity:unmute' => "Desativar Silencioso das Notificações",
	'entity:unmute:success' => "Você desativou com sucesso o Modo Silencioso das Notificações de %s",
	'entity:unmute:fail' => "Ocorreu um erro ao tentar desativar o Modo Silencioso das Notificações de %s",


/**
 * Annotations / Anotações 
 */
	
	'annotation:delete:fail' => "Ocorreu um erro ao remover a anotação...",
	'annotation:delete:success' => "A anotação foi removida com sucesso!",
	
/**
 * Action gatekeeper / Proteção de Ações
 */

	'actiongatekeeper:missingfields' => 'O formulário está sem os campos __token ou __ts',
	'actiongatekeeper:tokeninvalid' => 'A página que você estava usando expirou. Por favor, tente novamente.',
	'actiongatekeeper:timeerror' => 'A página que você estava usando expirou. Por favor, atualize e tente novamente.',
	'actiongatekeeper:pluginprevents' => 'Desculpe. Seu formulário não pôde ser enviado por um motivo desconhecido.',
	'actiongatekeeper:uploadexceeded' => 'O tamanho do(s) arquivo(s) enviado(s) ultrapassou o limite definido pelo Administrador do Site',


/**
 * Javascript
 */

	'js:security:token_refresh_failed' => 'Falha ao contatar %s. Você pode ter problemas ao salvar o conteúdo. Por favor, atualize esta página.',
	'js:lightbox:current' => "imagem %s de %s",

/**
 * Diagnostics / Diagnósticos
 */
	'diagnostics:report' => 'Relatório de Diagnóstico',
	'diagnostics:header' => '========================================================================
Relatório de Diagnóstico do Elgg
Gerado %s por %s
========================================================================

',
	'diagnostics:report:basic' => '
Versão do Elgg %s

------------------------------------------------------------------------',
	'diagnostics:report:php' => '
Informações do PHP:
%s
------------------------------------------------------------------------',
	'diagnostics:report:md5' => '
Arquivos Instalados e Verificação de Integridade:

%s
------------------------------------------------------------------------',
	'diagnostics:report:globals' => '
Variáveis Globais:

%s
------------------------------------------------------------------------',
	
/**
 * Trash / Lixeira
 */
	'trash:menu:page' => "Lixeira",
	
	'trash:imprint:actor' => "Excluído por: %s",
	'trash:imprint:type' => "Tipo: %s",
	
	'trash:owner:title' => "Lixeira",
	'trash:owner:title_owner' => "Lixeira de %s",
	'trash:group:title' => "Lixeira de %s",
	
	'trash:no_results' => "Nenhum item encontrado na Lixeira.",
	
	'trash:notice:retention' => "Itens Excluídos serão Removidos Automaticamente após %s dias.",
	
	'trash:restore:container:owner' => "Você pode restaurar este item excluído para a sua área pessoal, pois o Grupo original também foi removido.",
	'trash:restore:container:choose' => "Como o Grupo original deste item foi removido, você pode escolher para onde restaurá-lo.",
	'trash:restore:container:group' => "Restaurar em um Grupo diferente",
	'trash:restore:group' => "Buscar um Grupo",
	'trash:restore:group:help' => "Verifique se o Grupo selecionado tem o recurso ativado para este item, caso contrário, pode ocorrer um erro.",
	'trash:restore:owner' => "Restaurar para o Proprietário (%s)",


/**
 * Miscellaneous / Diversos
 */
	'elgg:powered' => "Desenvolvido por Elgg",
	'field:required' => "Obrigatório",

/**
 * Accessibility / Acessibilidade
 */
	'aria:label:admin:users:search' => "Busca por Usuário",

	'menu:admin_footer:header' => "Rodapé Administrativo",
	'menu:admin_header:header' => "Cabeçalho Administrativo",
	'menu:admin:users:bulk:header' => "Ações em Massa para Usuários",
	'menu:annotation:header' => "Anotação",
	'menu:breadcrumbs:header' => "Navegação (Breadcrumbs)",
	'menu:comments:header' => "Comentários",
	'menu:entity:header' => "Entidade",
	'menu:entity_navigation:header' => "Navegação da Entidade",
	'menu:filter:header' => "Filtro",
	'menu:footer:header' => "Rodapé",
	'menu:login:header' => "Login",
	'menu:owner_block:header' => "Bloco do Proprietário",
	'menu:page:header' => "Página",
	'menu:relationship:header' => "Relacionamento",
	'menu:river:header' => "Atividades",
	'menu:site:header' => "Site",
	'menu:social:header' => "Social",
	'menu:title:header' => "Título",
	'menu:title:widgets:header' => "Administração de Widgets",
	'menu:topbar:header' => "Barra Superior",
	'menu:user_hover:header' => "Informações Rápidas do Usuário",
	'menu:user:unvalidated:header' => "Usuário Não Verificado",
	'menu:walled_garden:header' => "Ambiente Restrito (Walled Garden)",
	'menu:widget:header' => "Controle do Widget",

/**
 * Cli commands / Linha de Comando (CLI)
 */
	'cli:login:success:log' => "Conectado como %s [guid: %s]",
	'cli:response:output' => "Resposta:",
	'cli:option:as' => "Executar o comando em nome de um usuário com o nome de usuário informado",
	'cli:option:language' => "Executar o comando no idioma especificado (ex: en, nl ou de)",

	'cli:cache:clear:description' => "Limpar os caches do Elgg",
	'cli:cache:invalidate:description' => "Invalidar os caches do Elgg",
	'cli:cache:purge:description' => "Purgar os caches do Elgg",
	
	'cli:cron:description' => "Executa os manipuladores do Cron para todos os intervalos ou para um intervalo específico",
	'cli:cron:option:interval' => "Nome do Intervalo (ex: hourly = de hora em hora, daily = diariamente etc.)",
	'cli:cron:option:force' => "Força a execução dos comandos do Cron mesmo que ainda não estejam programados para rodar",
	'cli:cron:option:time' => "Horário de inicialização do Cron",
	
	'cli:database:seed:description' => "Preenche o banco de dados com Entidades Falsas",
	'cli:database:seed:argument:create' => "Criar Novas Entidades sempre que executar o Seeding",
	'cli:database:seed:option:limit' => "Número de Entidades para criar",
	'cli:database:seed:option:image_folder' => "Caminho para uma pasta local com imagens para o Seeding",
	'cli:database:seed:option:type' => "Tipo de Entidades para (remover) gerar (%s)",
	'cli:database:seed:option:create_since' => "Uma data/hora em formato PHP para definir o limite mínimo de criação das entidades geradas.",
	'cli:database:seed:option:create_until' => "Uma data/hora em formato PHP para limitar a criação das entidades geradas até esse momento.",
	'cli:database:seed:log:error:faker' => "Esta é uma ferramenta para Desenvolvedores, destinada apenas para testes. Por favor, evite usá-la.",
	'cli:database:seed:log:error:logged_in' => "Não execute o Seed do banco de dados com um Usuário logado.",
	'cli:database:seed:ask:limit' => "Quantos itens devem ser semeados pelo Seeder '%s'",

	'cli:database:seeders:description' => "Exibe todos os Seeders do banco de dados disponíveis com a contagem atual de entidades geradas.",
	'cli:database:seeders:handler' => "Controlador de Dados pré-carregados",
	'cli:database:seeders:type' => "Tipo de Dados pré-carregados",
	'cli:database:seeders:count' => "Contagem de Entidades geradas",
	
	'cli:database:unseed:description' => "Remove entidades falsas pré-criadas do banco de dados",
	
	'cli:plugins:activate:description' => "Ativar Plugin(s)",
	'cli:plugins:activate:option:force' => "Resolver conflitos desativando Plugins conflitantes e ativando os necessários",
	'cli:plugins:activate:argument:plugins' => "IDs dos Plugins a serem ativados",
	'cli:plugins:activate:progress:start' => "Ativando Plugins",

		'cli:plugins:deactivate:description' => "Desativar Plugin(s)",
	'cli:plugins:deactivate:option:force' => "Forçar desativação de todos os Plugins dependentes",
	'cli:plugins:deactivate:argument:plugins' => "IDs dos Plugins a serem desativados",
	'cli:plugins:deactivate:progress:start' => "Desativando Plugins",
	
	'cli:plugins:list:description' => "Listar todos os Plugins instalados no site",
	'cli:plugins:list:option:status' => "Status do Plugin ( %s )",
	'cli:plugins:list:option:refresh' => "Atualizar a lista de Plugins com os recentemente instalados",
	'cli:plugins:list:error:status' => "%s não é um status válido. As opções permitidas são: %s",
	
	'cli:upgrade:description' => "Executar Atualizações do Sistema",
	'cli:upgrade:option:force' => "Forçar a execução das Atualizações mesmo se já houver uma atualização em andamento.",
	'cli:upgrade:argument:async' => "Executar Atualizações Assíncronas Pendentes",
	'cli:upgrade:system:upgraded' => "As Atualizações do Sistema foram Executadas",
	'cli:upgrade:system:failed' => "As Atualizações do Sistema Falharam",
	'cli:upgrade:async:upgraded' => "As Atualizações Assíncronas foram Executadas",
	'cli:upgrade:aysnc:failed' => "As Atualizações Assíncronas Falharam!",
	
	'cli:upgrade:batch:description' => "Executa uma ou mais Atualizações",
	'cli:upgrade:batch:argument:upgrades' => "Uma ou mais Atualizações (nomes de classes) a serem executadas",
	'cli:upgrade:batch:option:force' => "Executar Atualização mesmo que já tenha sido Concluída antes",
	'cli:upgrade:batch:finished' => "Execução das Atualizações Finalizada",
	'cli:upgrade:batch:notfound' => "Nenhuma Classe de Atualização encontrada para %s",

	'cli:upgrade:list:description' => "Lista Todas as Atualizações no Sistema",
	'cli:upgrade:list:completed' => "Atualizações Concluídas",
	'cli:upgrade:list:pending' => "Atualizações Pendentes",
	'cli:upgrade:list:notfound' => "Nenhuma Atualização Encontrada",

	
/**
 * Languages according to ISO 639-1 (with a couple of exceptions) / Idiomas conforme o padrão ISO 639-1 (com algumas exceções)
 */

   "aa" => "Afar",
   "ab" => "Abcázio",
   "af" => "Africâner",
   "am" => "Amárico",
   "ar" => "Árabe",
   "as" => "Assamês",
   "ay" => "Aimará",
   "az" => "Azerbaijano",
   "ba" => "Bachkir",
   "be" => "Bielorrusso",
   "bg" => "Búlgaro",
   "bh" => "Bihari",
   "bi" => "Bislama",
   "bn" => "Bengali / Bangla",
   "bo" => "Tibetano",
   "br" => "Bretão",
   "ca" => "Catalão",
   "cmn" => "Chinês Mandarim",
   "co" => "Córsico",
   "cs" => "Tcheco",
   "cy" => "Galês",
   "da" => "Dinamarquês",
   "de" => "Alemão",
   "dz" => "Dzonga",
   "el" => "Grego",
   "en" => "Inglês",
   "eo" => "Esperanto",
   "es" => "Espanhol",
   "et" => "Estoniano",
   "eu" => "Basco",
   "eu_es" => "Basco (Espanha)",
   "fa" => "Persa",
   "fi" => "Finlandês",
   "fj" => "Fijiano",
   "fo" => "Feroês",
   "fr" => "Francês",
   "fy" => "Frísio",
   "ga" => "Irlandês",
   "gd" => "Gaélico (Escocês)",
   "gl" => "Galego",
   "gn" => "Guarani",
   "gu" => "Guzerate",
   "he" => "Hebraico",
   "ha" => "Hauçá",
   "hi" => "Hindi",
   "hr" => "Croata",
   "hu" => "Húngaro",
   "hy" => "Armênio",
   "ia" => "Interlíngua",
   "id" => "Indonésio",
   "ie" => "Interlingue",
   "ik" => "Inupiak",
   "is" => "Islandês",
   "it" => "Italiano",
   "iu" => "Inuktitut",
   "iw" => "Hebraico (obsoleto)",
   "ja" => "Japonês",
   "ji" => "Iídiche (obsoleto)",
   "jw" => "Javanês",
   "ka" => "Georgiano",
   "kk" => "Cazaque",
   "kl" => "Groenlandês",
   "km" => "Cambojano",
   "kn" => "Canarês",
   "ko" => "Coreano",
   "ks" => "Caxemira",
   "ku" => "Curdo",
   "ky" => "Quirguiz",
   "la" => "Latim",
   "ln" => "Lingala",
   "lo" => "Laosiano",
   "lt" => "Lituano",
   "lv" => "Letão",
   "mg" => "Malgaxe",
   "mi" => "Maori",
   "mk" => "Macedônio",
   "ml" => "Malaiala",
   "mn" => "Mongol",
   "mo" => "Moldávio",
   "mr" => "Marata",
   "ms" => "Malaio",
   "mt" => "Maltês",
   "my" => "Birmanês",
   "na" => "Nauruano",
   "ne" => "Nepalês",
   "nl" => "Holandês",
   "no" => "Norueguês",
   "oc" => "Occitano",
   "om" => "Oromo (Afan)",
   "or" => "Oriá",
   "pa" => "Panjabi",
   "pl" => "Polonês",
   "ps" => "Pashto / Pushto",
   "pt" => "Português",
   "pt_br" => "Português (Brasil)",
   "qu" => "Quíchua",
   "rm" => "Romanche",
   "rn" => "Kirundi",
   "ro" => "Romeno",
   "ro_ro" => "Romeno (Romênia)",
   "ru" => "Russo",
   "rw" => "Kinyarwanda",
   "sa" => "Sânscrito",
   "sd" => "Sindi",
   "sg" => "Sango",
   "sh" => "Servo-croata",
   "si" => "Cingalês",
   "sk" => "Eslovaco",
   "sl" => "Esloveno",
   "sm" => "Samoano",
   "sn" => "Shona",
   "so" => "Somali",
   "sq" => "Albanês",
   "sr" => "Sérvio",
   "sr_latin" => "Sérvio (Latim)",
   "ss" => "Siswati",
   "st" => "Soto do Sul",
   "su" => "Sudanês",
   "sv" => "Sueco",
   "sw" => "Suaíli",
   "ta" => "Tâmil",
   "te" => "Télugo",
   "tg" => "Tajique",
   "th" => "Tailandês",
   "ti" => "Tigrínia",
   "tk" => "Turcomeno",
   "tl" => "Tagalo",
   "tn" => "Tswana",
   "to" => "Tonganês",
   "tr" => "Turco",
   "ts" => "Tsonga",
   "tt" => "Tártaro",
   "tw" => "Twi",
   "ug" => "Uigur",
   "uk" => "Ucraniano",
   "ur" => "Urdu",
   "uz" => "Uzbeque",
   "vi" => "Vietnamita",
   "vo" => "Volapuque",
   "wo" => "Wolof",
   "xh" => "Xhosa",
   // "y" => "Iídiche",
   "yi" => "Iídiche",
   "yo" => "Iorubá",
   "za" => "Zhuang",
   "zh" => "Chinês",
   "zh_hans" => "Chinês Simplificado",
   "zu" => "Zulu",


/**
 * Upgrades / Atualizações
 */
	"core:upgrade:2017080900:title" => "Alterar codificação do banco de dados para suporte a caracteres multibyte",
	"core:upgrade:2017080900:description" => "Altera a codificação do banco e das tabelas para utf8mb4, para suportar caracteres multibyte como emojis",

	"core:upgrade:2020102301:title" => "Remover o plugin de diagnósticos",
	"core:upgrade:2020102301:description" => "Exclui a entidade associada ao plugin Diagnósticos removido no Elgg 4.0",

	"core:upgrade:2021022401:title" => "Migrar assinaturas de notificações",
	"core:upgrade:2021022401:description" => "As assinaturas de notificações agora são armazenadas de forma diferente no banco. Use essa atualização para migrar todas as assinaturas para o novo formato.",

	"core:upgrade:2021040701:title" => "Migrar configurações de notificações do usuário",
	"core:upgrade:2021040701:description" => "Para facilitar o armazenamento das configurações de notificação de um usuário para desenvolvedores, é necessário migrar para a nova convenção de nomenclatura.",

	'core:upgrade:2021040801:title' => "Migrar preferências de notificação das coleções de acesso",
	'core:upgrade:2021040801:description' => "Foi introduzida uma nova forma de armazenar preferências de notificação. Esta atualização migra as configurações antigas para a nova lógica.",

	'core:upgrade:2021041901:title' => "Remover o plugin de notificações",
	'core:upgrade:2021041901:description' => "Exclui a entidade associada ao plugin Notificações removido no Elgg 4.0",

	'core:upgrade:2021060401:title' => "Adicionar donos do conteúdo aos assinantes",
	'core:upgrade:2021060401:description' => "Os donos do conteúdo devem estar inscritos em seu próprio conteúdo. Esta atualização migra todos os conteúdos antigos.",

	'core:upgrade:2023011701:title' => "Remover comentários em thread órfãos",
	'core:upgrade:2023011701:description' => "Devido a um erro na remoção de comentários em thread, alguns comentários órfãos foram criados. Esta atualização removerá esses órfãos.",

	'core:upgrade:2024020101:title' => "Migrar coordenadas de corte de ícone",
	'core:upgrade:2024020101:description' => "As coordenadas de corte agora são armazenadas de forma uniforme. Esta atualização migra os antigos valores de metadados x1, x2, y1 e y2.",

	'core:upgrade:2024020901:title' => "Remover metadado icontime",
	'core:upgrade:2024020901:description' => "Remove o metadado icontime não confiável do banco de dados",


	'core:upgrade:2024070201:title' => "Migrar Configuração de Debug",
	'core:upgrade:2024070201:description' => "Altera o valor da configuração no banco de dados para Registro de Debug para um valor suportado.",

	'core:upgrade:2024071001:title' => "Migrar preferência de notificação de validação do Administrador",
	'core:upgrade:2024071001:description' => "Move o armazenamento da Preferência de Notificações do Administrador para as Configurações de Notificações.",
);

