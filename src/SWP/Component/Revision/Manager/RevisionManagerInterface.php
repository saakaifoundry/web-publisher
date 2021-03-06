<?php

declare(strict_types=1);

/*
 * This file is part of the Superdesk Publisher Revision Component.
 *
 * Copyright 2017 Sourcefabric z.u. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2015 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Component\Revision\Manager;

use SWP\Component\Revision\Model\RevisionInterface;
use SWP\Component\Revision\Context\RevisionContextInterface;

interface RevisionManagerInterface
{
    /**
     * @param RevisionInterface      $revision
     * @param RevisionInterface|null $workingRevision
     *
     * @return RevisionInterface
     */
    public function publish(RevisionInterface $revision, RevisionInterface $workingRevision = null): RevisionInterface;

    /**
     * Rollback provided revision to previous one.
     *
     * @param RevisionInterface $revision
     *
     * @return RevisionInterface
     */
    public function rollback(RevisionInterface $revision): RevisionInterface;

    /**
     * Create new revision.
     *
     * @param RevisionInterface|null $previous
     *
     * @return RevisionInterface
     */
    public function create(RevisionInterface $previous = null): RevisionInterface;

    /**
     * @return RevisionContextInterface
     */
    public function getRevisionContext(): RevisionContextInterface;
}
