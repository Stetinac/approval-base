<?php

/**
 * Copyright (C) 2013-2019 Combodo SARL
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 *
 *
 */

use Combodo\iTop\Portal\Routing\ItopExtensionsExtraRoutes;

ItopExtensionsExtraRoutes::AddRoutes(
	array(
		array('pattern' => '/approval/{sBrickId}',
			'callback' => 'Combodo\\iTop\\Portal\\Controller\\ApprovalBrickController::DisplayAction',
			'bind' => 'p_approval_brick'
		),
		array('pattern' => '/approval/view/{sObjectClass}/{sObjectId}',
			'callback' => 'Combodo\\iTop\\Portal\\Controller\\ApprovalBrickController::ViewObjectAction',
			'bind' => 'p_approval_view_object'
		),
		array('pattern' => '/approval/attachment/download/{sAttachmentId}',
			'callback' => 'Combodo\\iTop\\Portal\\Controller\\ApprovalBrickController::AttachmentAction',
			'bind' => 'p_approval_attachment_download',
		),
	)
);